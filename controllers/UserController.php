<?php

class UserController extends Controller
{

  function __construct()
  {
    $this->folder = 'default';
  }

  function login()
  {
    require_once 'vendor/Model.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
      echo '{"code":1, "message":"Vui lòng nhập địa chỉ email của bạn."}';
      return false;
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '{"code":1, "message":"Địa chỉ email không đúng định dạng."}';
        return false;
      }
    }

    if (empty($password)) {
      echo '{"code":2, "message":"Vui lòng nhập mật khẩu của bạn."}';
      return false;
    }
    return true;
  }

  function register(){
    require_once 'vendor/Model.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phonenumber'];
    $emailsignup = $_POST['emailsignup'];
    $passsignup = $_POST['passsignup'];

    if (empty($fname)) {
      echo '{"code":1, "message":"Vui lòng nhập họ của bạn."}';
      return false;
    } else {
      if (!preg_match($fname,"/^[a-zA-Z ]?$/")) {
        echo '{"code":1, "message":"Họ không đúng định dạng."}';
        return false;
      }
    }
    if (empty($lname)) {
      echo '{"code":2, "message":"Vui lòng nhập tên của bạn."}';
      return false;
    } else {
      if (!preg_match($lname,"/^[a-zA-Z ]?$/")) {
        echo '{"code":2, "message":"Tên không đúng định dạng."}';
        return false;
      }
    }
    if (empty($phone)) {
      echo '{"code":3, "message":"Vui lòng nhập số điện thoại của bạn."}';
      return false;
    } else {
      if (!preg_match($phone,"/^[a-zA-Z ]?$/")) {
        echo '{"code":3, "message":"số điện thoại không đúng định dạng."}';
        return false;
      }
    }
    if (empty($emailsignup)) {
      echo '{"code":4, "message":"Vui lòng nhập email của bạn."}';
      return false;
    } else {
      if (!filter_var($emailsignup, FILTER_VALIDATE_EMAIL)) {
        echo '{"code":4, "message":"Email không đúng định dạng."}';
        return false;
      }
    }
    if (empty($passsignup)) {
      echo '{"code":5, "message":"Vui lòng nhập mật khẩu của bạn."}';
      return false;
    } else {
      if (!preg_match($passsignup,"/^[a-zA-Z0-9]{8}$/")) {
        echo '{"code":5, "message":"Vui lòng nhập mật khẩu gồm chữ và số."}';
        return false;
      }
    }


    return true;
  }
}
