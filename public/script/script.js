﻿$(document).ready(function () {

  $('#btnLogin').click(login)
  $('#btnRegister').click(register)

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
});