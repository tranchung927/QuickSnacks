<?php
$controllers = array(
    'error' => ['notFound'],
    'home'  => ['index'],
    'cities' => ['index', 'showCity'],
    'category' => ['index'],
    'newProduct' => ['index'],
); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'error';
  $action = 'notFound';
}

// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
include_once('controllers/' . ucfirst($controller) . 'Controller.php');
// Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
//$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$klass = ucfirst($controller). 'Controller';
$controller = new $klass;
$controller->$action();