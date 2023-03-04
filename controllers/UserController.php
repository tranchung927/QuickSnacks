<?php

class UserController extends Controller
{

  function __construct()
  {
    $this->folder = 'default';
  }

  function login()
  {
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
    require_once 'vendor/Model.php';
    require_once 'models/AccountModel.php';
    $md = new AccountModel;
    $data = array();
    $data = $md->getUserByEmail($email);
    if (empty($data) || sha1($password) == $data['password']) {
      echo '{"code":3, "message":"Sai tên tài khoản hoặc mật khẩu!"}';
      return false;
    }
    $_SESSION['user'] = $data;
    if (isset($_SESSION['cart'])) {
    }
    echo '{"code":0, "message":"Đăng nhập thành công"}';
    return true;
  }

  function register()
  {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $isCheck = $_POST['is_check'];

    if (empty($firstName)) {
      echo '{"code":1, "message":"Vui lòng nhập họ của bạn."}';
      return false;
    } else {
      if (!preg_match("/^[a-zA-Z ]+/", $firstName)) {
        echo '{"code":1, "message":"Họ không đúng định dạng."}';
        return false;
      }
    }
    if (empty($lastName)) {
      echo '{"code":2, "message":"Vui lòng nhập tên của bạn."}';
      return false;
    } else {
      if (!preg_match("/^[a-zA-Z ]+/", $lastName)) {
        echo '{"code":2, "message":"Tên không đúng định dạng."}';
        return false;
      }
    }
    if (empty($phone)) {
      echo '{"code":3, "message":"Vui lòng nhập số điện thoại của bạn."}';
      return false;
    } else {
      if (!preg_match("/^[0-9]{10}/", $phone)) {
        echo '{"code":3, "message":"Số điện thoại không đúng định dạng."}';
        return false;
      }
    }
    if (empty($email)) {
      echo '{"code":4, "message":"Vui lòng nhập email của bạn."}';
      return false;
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '{"code":4, "message":"Email không đúng định dạng."}';
        return false;
      }
    }
    if (empty($password)) {
      echo '{"code":5, "message":"Vui lòng nhập mật khẩu của bạn."}';
      return false;
    } else {
      if (!preg_match("/^[a-zA-Z0-9]{8}/", $password)) {
        echo '{"code":5, "message":"Mật khẩu phải có 8 kí tự bao gồm chữ và số."}';
        return false;
      }
    }

    if ($isCheck != "true") {
      echo '{"code":6, "message":""}';
      return false;
    }

    require_once 'vendor/Model.php';
    require_once 'models/AccountModel.php';
    $md = new AccountModel;
    if ($md->getUserByEmail($email)) {
      echo '{"code":4, "message":"Địa chỉ email đã tồn tại."}';
      return false;
    }
    if ($md->addUser($firstName, $lastName, $email, $phone, $password)) {
      $_SESSION['user'] = $md->getUserByEmail($email);
      echo '{"code":0, "message":"Đăng kí thành công."}';
      return true;
    } else {
      echo '{"code":7, "message":"Đã có lỗi trong quá trình tạo tài khoản, vui lòng thử lại sau."}';
      return false;
    }
  }
}
