<?php

class UserController extends Controller
{

  function __construct()
  {
    $this->folder = 'default';
  }

  function index()
  {
    $this->render('info');
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
    if (isset($data) && sha1($password) == $data['password']) {
      $_SESSION['user'] = $data;
      echo '{"code":0, "message":"Đăng nhập thành công"}';
      return true;
    }
    echo '{"code":3, "message":"Sai tên tài khoản hoặc mật khẩu!"}';
    return false;
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
    if ($md->createUser($firstName, $lastName, $email, $phone, $password)) {
      $_SESSION['user'] = $md->getUserByEmail($email);
      echo '{"code":0, "message":"Đăng kí thành công."}';
      return true;
    } else {
      echo '{"code":7, "message":"Đã có lỗi trong quá trình tạo tài khoản, vui lòng thử lại sau."}';
      return false;
    }
  }

  function update()
  {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

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

    require_once 'vendor/Model.php';
    require_once 'models/AccountModel.php';
    $md = new AccountModel;
    $md->updateUser($_SESSION["user"]["id"], $firstName, $lastName, $email, $phone);
    $data = $md->getUserById($_SESSION["user"]["id"]);
    $_SESSION["user"] = $data;
    echo '{"code":0, "message":""}';
    return true;
  }

  function updateAddress()
  {
    require_once 'vendor/Model.php';
    require_once 'models/AddressModel.php';
    require_once 'models/CityModel.php';
    require_once 'models/DistrictModel.php';
    require_once 'models/AccountModel.php';

    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $phone = $_POST["phone"];
    $cityName = $_POST["city"];
    $districtName = $_POST["district"];
    $fullAddress = $_POST["address"];

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
    // if (empty($cityName)) {
    //   echo '{"code":4, "message":"Vui lòng chọn Tỉnh/Thành phố."}';
    //   return false;
    // } 
    // $city = (new CityModel)->getByName($cityName);
    // if (!$city) {
    //   echo '{"code":4, "message":"Tỉnh/Thành phố không hợp lệ."}';
    //   return false;
    // }
    if (empty($districtName)) {
      echo '{"code":5, "message":"Vui lòng chọn Quận/Huyện."}';
      return false;
    }
    $district = (new DistrictModel)->getByNameAndCityId($districtName, 1);
    if (!$district) {
      echo '{"code":5, "message":"Quận/Huyện không hợp lệ."}';
      return false;
    }
    if (empty($fullAddress)) {
      echo '{"code":6, "message":"Vui lòng nhập địa chỉ."}';
      return false;
    }


    if (empty($_SESSION["user"]["address_id"])) {
      $add = (new AddressModel)->createAddress($firstName, $lastName, $phone, 1, $district["id"], $fullAddress);
      if ($add) {
        (new AccountModel)->updateAddress($_SESSION["user"]["id"], $add["id"]);
        $_SESSION["user"]["address_id"] = $add["id"];
      }
    } else {
      (new AddressModel)->updateAddress($_SESSION["user"]["address_id"], $firstName, $lastName, $phone, 1, $district["id"], $fullAddress);
    }
    echo '{"code":0, "message":""}';
    return true;
  }

  function logout()
  {
    session_unset();
    session_destroy();
    unset($_SESSION['user']);
    return true;
  }
}
