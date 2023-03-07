$(document).ready(function () {
  $('#btnLogin').click(login);
  $('#btnRegister').click(register);
  $('.btnAddToCart').click(function () {
    var masp = $(this).data('masp');
    addToCart(masp);
  });
  $('.productItem').click(function () {
    var masp = $(this).data('masp');
    productDetail(masp);
  });
  $('#btnUpdateInfo').click(updateAccount);
  $('#btnLogout').click(logout);
  $('#btnCreateOrder').click(createOrder)
});

function register(e) {
  e.preventDefault();
  var first_name = $('#txtFistNameRegister').val();
  var last_name = $('#txtLastNameRegister').val();
  var email = $('#txtEmailRegister').val();
  var phone = $('#txtPhoneNumberRegister').val();
  var password = $('#txtPasswordRegister').val();
  var is_check = $('#cbPolicyRegister').is(":checked");
  $('#errFistNameRegister').html('');
  $('#errLastNameRegister').html('');
  $('#errPhoneNumberRegiste').html('');
  $('#errEmailRegister').html('');
  $('#errPasswordRegister').html('');
  $.ajax({
    url: "index.php?controller=user&action=register",
    type: "post",
    dataType: "text",
    data: {
      first_name, last_name, phone, email, password, is_check
    },
    success: function (result) {
      const obj = JSON.parse(result);
      switch (obj.code) {
        case 0:
          window.location.replace("http://localhost/QuickSnacks/index.php");
          break;
        case 1:
          $('#errFistNameRegister').html(obj.message.toString());
          break;
        case 2:
          $('#errLastNameRegister').html(obj.message.toString());
          break;
        case 3:
          $('#errPhoneNumberRegiste').html(obj.message.toString());
          break;
        case 4:
          $('#errEmailRegister').html(obj.message.toString());
          break;
        case 5:
          $('#errPasswordRegister').html(obj.message.toString());
          break;
        case 6:
          break;
        default:
          alert(obj.message.toString());
          break;
      }
    }
  });
};

function login(e) {
  e.preventDefault();
  var email = $('#txtEmail').val();
  var password = $('#txtPassword').val();
  $('#errSignEmail').html('');
  $('#errSignPW').html('');
  $.ajax({
    url: "index.php?controller=user&action=login",
    type: "post",
    dataType: "text",
    data: {
      email, password
    },
    success: function (result) {
      const obj = JSON.parse(result);
      switch (obj.code) {
        case 0:
          window.location.replace("http://localhost/QuickSnacks/index.php");
          break;
        case 1:
          $('#errSignEmail').html(obj.message.toString());
          break;
        case 2:
          $('#errSignPW').html(obj.message.toString());
          break;
        default:
          alert(obj.message.toString());
          break;
      }
    }
  });
}

function loadmore() {
  var id = -1
  var sPageURL = window.location.search.substring(1);
  var sURLVariables = sPageURL.split('&');
  for (var i = 0; i < sURLVariables.length; i++) {
    var sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] == 'id') {
      id = sParameterName[1];
    }
  }
  var start = parseInt($('#pageTemp').text());
  var page = start + 1;
  var limit = 16;
  $('#pageTemp').html(page);
  $.ajax({
    url: "index.php?controller=product&action=loadmore",
    type: "get",
    dataType: "text",
    data: {
      page, limit, id
    },
    success: function (result) {
      if (!result) { alert("Đã hết sản phẩm để hiển thị!"); return 0; }
      $('#category-content').append(result);
    }
  });
}

function addToCart(masp) {
  $.ajax({
    url: "index.php?controller=order&action=addToCart",
    type: "post",
    dataType: "text",
    data: {
      masp
    },
    success: function (result) {
      $('#cart_count').html(result);
    }
  });
}

function addToCartDetail(id) {
  var quantity = parseInt($('#productQuantity').text());
  addToCart(id + "," + quantity);
}

function deleteCart(product_id) {
  $.ajax({
    url: "index.php?controller=order&action=deleteItem",
    type: "post",
    dataType: "text",
    data: {
      product_id
    },
    success: function (result) {
      window.location.reload();
    }
  });
}

function productDetail(product_id) {
  $('#applicationModal').attr('data-bs-remote', 'index.php?controller=product');
  $('#applicationModalContent').empty();

  $.ajax({
    url: "index.php?controller=product",
    type: "get",
    dataType: "text",
    data: {
      product_id
    },
    success: function (result) {
      $('#applicationModalContent').html(result);
    }
  });
}

function currencyFormat(number) {
  return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') + "₫";
}

function increment(index) {
  var quantity = parseInt($(`#productQuantity${index ?? ''}`).text());
  if (quantity < 100) {
    quantity++;
    if (quantity >= 100) {
      $(`#btnIncrement${index ?? ''}`).css("opacity", 0.2);
    }
    $(`#btnDecrement${index ?? ''}`).css('opacity', 1);
    $(`#productQuantity${index ?? ''}`).html(quantity);
  }
  return quantity;
}

function decrement(index) {
  var quantity = parseInt($(`#productQuantity${index ?? ''}`).text());
  if (quantity > 1) {
    quantity--;
    if (quantity <= 1) {
      $(`#btnDecrement${index ?? ''}`).css("opacity", 0.2);
    }
    $(`#btnIncrement${index ?? ''}`).css("opacity", 1);
    $(`#productQuantity${index ?? ''}`).html(quantity);
  }
  return quantity;
}

function itemIncrement(price) {
  var total = "Thêm vào giỏ (" + currencyFormat(price * increment()) + ")"
  $('#btnAddToCartDetail').html(total);
}

function itemDecrement(price) {
  var total = "Thêm vào giỏ (" + currencyFormat(price * increment()) + ")"
  $('#btnAddToCartDetail').html(total);
}

function cartIncrement(price, index) {
  var quantity = increment(index);
  $(`#cartItemPrice${index ?? ''}`).html(currencyFormat(price * quantity));
  $.ajax({
    url: "index.php?controller=order&action=updateCart",
    type: "post",
    dataType: "text",
    data: {
      quantity, index
    },
    success: function (result) {
      const obj = JSON.parse(result);
      $('#cartSubtotal').html(currencyFormat(obj.subtotal));
      $('#cartDeliveryCharge').html(currencyFormat(obj.delivery_charge));
      $('#cartTotal').html(currencyFormat(obj.total));
      $('#cartCheckout').html(currencyFormat(obj.total));
      $('#cart_count').html(obj.total_quantity);
    }
  });
}

function cartDecrement(price, index) {
  var quantity = decrement(index);
  $(`#cartItemPrice${index ?? ''}`).html(currencyFormat(price * quantity));
  $.ajax({
    url: "index.php?controller=order&action=updateCart",
    type: "post",
    dataType: "text",
    data: {
      quantity, index
    },
    success: function (result) {
      const obj = JSON.parse(result);
      $('#cartSubtotal').html(currencyFormat(obj.subtotal));
      $('#cartDeliveryCharge').html(currencyFormat(obj.delivery_charge));
      $('#cartTotal').html(currencyFormat(obj.total));
      $('#cartCheckout').html(currencyFormat(obj.total));
      $('#cart_count').html(obj.total_quantity);
    }
  });
}

function updateAccount() {
  var first_name = $('#txtFistNameInfo').val();
  var last_name = $('#txtLastNameInfo').val();
  var email = $('#txtEmailInfo').val();
  var phone = $('#txtPhoneNumberInfo').val();
  $('#errFistNameInfo').html('');
  $('#errLastNameInfo').html('');
  $('#errPhoneNumberInfo').html('');
  $('#errEmailInfo').html('');
  $.ajax({
    url: "index.php?controller=user&action=update",
    type: "post",
    dataType: "text",
    data: {
      first_name, last_name, phone, email
    },
    success: function (result) {
      const obj = JSON.parse(result);
      switch (obj.code) {
        case 0:
          window.location.reload();
          break;
        case 1:
          $('#errFistNameInfo').html(obj.message.toString());
          break;
        case 2:
          $('#errLastNameInfo').html(obj.message.toString());
          break;
        case 3:
          $('#errEmailInfo').html(obj.message.toString());
          break;
        default:
          alert(obj.message.toString());
          break;
      }
    }
  });
}

function logout() {
  $.ajax({
    url: "index.php?controller=user&action=logout",
    type: "post",
    dataType: "text",
    data: {},
    success: function (result) {
      window.location.replace("http://localhost/QuickSnacks/index.php");
    }
  });
}

function editAddress() {
  $('#applicationModal').attr('data-bs-remote', 'index.php?controller=order&action=address');
  $('#applicationModalContent').empty();
  $.ajax({
    url: "index.php?controller=order&action=address",
    type: "post",
    dataType: "text",
    data: {},
    success: function (result) {
      if (result) {
        $('#applicationModalContent').html(result);
      } else {
        window.location.replace("http://localhost/QuickSnacks/index.php?controller=index&action=signin");
      }
    }
  });
}

function confirmAddress() {
  var first_name = $('#txtAddressFistName').val();
  var last_name = $('#txtAddressLastName').val();
  var phone = $('#txtAddressPhoneNumber').val();
  var address = $('#txtAddressAddress').val();
  var city = $('#txtAddressCity').val();
  var district = $('#txtAddressDistrict').val();
  var address = $('#txtAddressAddress').val();
  $('#errAddressLastName').html('');
  $('#errAddressFistName').html('');
  $('#errAddressPhoneNumber').html('');
  $('#errAddressCity').html('');
  $('#errAddressDistrict').html('');
  $('#errAddressAddress').html('');
  $.ajax({
    url: "index.php?controller=user&action=updateAddress",
    type: "post",
    dataType: "text",
    data: {
      first_name, last_name, phone, city, district, address
    },
    success: function (result) {
      const obj = JSON.parse(result);
      switch (obj.code) {
        case 0:
          // var myModalEl = document.getElementById('staticBackdrop');
          // var modal = bootstrap.Modal.getInstance(myModalEl)
          // modal.hide();
          alert("Cập nhật địa chỉ thành công!");
          break;
        case 1:
          $('#errAddressFistName').html(obj.message.toString());
          break;
        case 2:
          $('#errAddressLastName').html(obj.message.toString());
          break;
        case 3:
          $('#errAddressPhoneNumber').html(obj.message.toString());
          break;
        case 4:
          $('#errAddressCity').html(obj.message.toString());
          break;
        case 5:
          $('#errAddressDistrict').html(obj.message.toString());
          break;
        case 6:
          $('#errAddressAddress').html(obj.message.toString());
          break;
        default:
          alert(obj.message.toString());
          break;
      }
    }
  });
}

function createOrder() {
  $.ajax({
    url: "index.php?controller=order&action=create",
    type: "post",
    dataType: "text",
    data: {},
    success: function (result) {
      const obj = JSON.parse(result);
      switch (obj.code) {
        case 0:
          window.location.replace("http://localhost/QuickSnacks/index.php?controller=order&action=complete");
          break;
        case 1:
          window.location.replace("http://localhost/QuickSnacks/index.php?controller=index&action=signin");
          break;
        default:
          alert(obj.message.toString());
          break;
      }
    }
  });
}