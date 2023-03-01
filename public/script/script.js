$(document).ready(function () {

  $('#btnLogin').click(login)
  $('#btnRegister').click(register)
  
  function register(e) {
    e.preventDefault();
    var fname = $('#txtFname').val();
    var lname = $('#txtLname').val();
    var emailsignup = $('#txtEmailSignup').val();
    var phone = $('#txtPhoneNumber').val();
    var passsignup = $('#txtPassSignup').val();
    $('#errFname').html('')
    $('#errLname').html('')
    $('#errPhoneNumber').html('')
    $('#errEmailSignup').html('')
    $('#errPasswordSignup').html('')
    $.ajax({
      url: "index.php?controller=user&action=register",
      type: "post",
      dataType: "text",
      data: {
        fname,lname,phone,emailsignup,passsignup
      },
      success: function (result) {
        const obj = JSON.parse(result);
        if (obj.code == 0) {
          window.location.replace("http://localhost/QuickSnacks/index.php?controller=home&action=signin");
        } else if(obj.code == 1) {
          console.log(obj.message.toString());
          $('#errFname').html(obj.message.toString());
        } else if(obj.code == 2){
          $('#errLname').html(obj.message.toString());
        }  else if(obj.code == 3){
          $('#errPhoneNumber').html(obj.message.toString());
        } else if(obj.code == 4){
          $('#errEmailSignup').html(obj.message.toString());
        } else if(obj.code == 5){
          $('#errPassSignup').html(obj.message.toString());
        }
      }
  });
};


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