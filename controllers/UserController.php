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
}
