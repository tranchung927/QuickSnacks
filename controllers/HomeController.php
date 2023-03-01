<?php

class HomeController extends Controller
{
  function __construct()
  {
    $this->folder = 'default';
  }

  function index()
  {
    $data = array(
      'name' => 'Chung',
      'age' => 29
    );
    $products = array();

    array_push($products, array(
      'id' => 1,
      'name' => 'Bánh ngô',
      'description' => 'Đây là bánh ngô bà Tân vê lốc',
      'price' => 18000.0,
      'status' => 'active',
      'calorie' => 300,
      'estimate_time' => 20
    ), array(
      'id' => 2,
      'name' => 'Bánh khoai',
      'description' => 'Đây là bánh khoai bà Tân vê lốc',
      'price' => 28000.0,
      'status' => 'active',
      'calorie' => 300,
      'estimate_time' => 20
    ), array(
      'id' => 3,
      'name' => 'Bánh sắn',
      'description' => 'Đây là bánh sắn bà Tân vê lốc',
      'price' => 58000.0,
      'status' => 'active',
      'calorie' => 300,
      'estimate_time' => 20
    ));


    $categories = array();
    array_push($categories, array(
      'id' => 1,
      'name' => 'Món mới',
    ), array(
      'id' => 2,
      'name' => 'Món Khai Vị',
    ), array(
      'id' => 3,
      'name' => 'Món Chính',
    ));

    $data = array('products' => $products, 'categories' => $categories);
    $this->render('home', $data);
  }

  function signin()
  {
    $this->render('login');
  }
  function signup()
  {
    $this->render('register');
  }
}
