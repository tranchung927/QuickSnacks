$(document).ready(function () {

  $('#btnLogin').click(login)
  function login(e) {
    e.preventDefault();
    var email = $('#txtEmail').val();
    var password = $('#txtPassword').val();
    $('#errSignEmail').html('')
    $('#errSignPW').html('')
    $.ajax({
      url: "index.php?controller=user&action=login",
      type: "post",
      dataType: "text",
      data: {
        email, password
      },
      success: function (result) {
        const obj = JSON.parse(result);
        if (obj.code == 0) {
          window.location.replace("http://localhost/QuickSnacks/index.php");
        } else if(obj.code == 1) {
          console.log(obj.message.toString());
          $('#errSignEmail').html(obj.message.toString());
        } else {
          $('#errSignPW').html(obj.message.toString());
        }
      }
    });
  }
});