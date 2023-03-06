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

function loadmore(start) {
  var id = -1
  var sPageURL = window.location.search.substring(1);
  var sURLVariables = sPageURL.split('&');
  for (var i = 0; i < sURLVariables.length; i++) {
    var sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] == 'id') {
      id = sParameterName[1];
    }
  }
  var page = start + 1;
  var limit = 16;
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

function productDetail(product_id) {
  $('#applicationModal').attr('data-bs-remote', 'index.php?controller=product');
  $('#applicationModalContent').empty();

  $.ajax({
    url: "index.php?controller=product",
    type: "post",
    dataType: "text",
    data: {
      product_id
    },
    success: function (result) {
      $('#applicationModalContent').html(result);
    }
  });
}

function increment(price) {
  var quantity = parseInt($('#productQuantity').text());
  if (quantity < 100) {
    quantity++;
    if (quantity >= 100) {
      $("#btnIncrement").css("opacity", 0.2);
    }
    $('#btnDecrement').css('opacity', 1);
    $('#productQuantity').html(quantity);
    var total = "Thêm vào giỏ (" + (price * quantity).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') + "₫)";
    $('#btnAddToCartDetail').html(total);
  }
}

function decrement(price) {
  var quantity = parseInt($('#productQuantity').text());
  if (quantity > 1) {
    quantity--;
    if (quantity <= 1) {
      $("#btnDecrement").css("opacity", 0.2);
    }
    $('#btnIncrement').css("opacity", 1);
    $('#productQuantity').html(quantity);
    var total = "Thêm vào giỏ (" + (price * quantity).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') + "₫)";
    $('#btnAddToCartDetail').html(total);
  }
}