<?php

class HomeController extends Controller {
  function __construct() {
    $this->folder = 'default';
  }

  public function index() {
   
   $banner = array();
   array_push($banner,array('image'=>'./public/images/carousel_1.jpeg'),
           array('image'=>'./public/images/carousel-2.jpeg'),
           array('image'=>'./public/images/carousel-3.jpeg'));
   
   $category = array();
   array_push($category,array(
       'id'=>1,
       'name'=> 'Món mới',
       'image'=> './public/images/MON MOI.jpeg'
    ), array(
        'id'=>2,
       'name'=> 'Đồ ăn nhẹ',
       'image'=> './public/images/MON MOI.jpeg'
    ),
     array(
        'id'=>3,
       'name'=> 'Sinh tố',
       'image'=> './public/images/MON MOI.jpeg'
    ),
    array(
        'id'=>4,
       'name'=> 'Dành cho trẻ em',
       'image'=> './public/images/MON MOI.jpeg'
    ),
     array(
        'id'=>5,
       'name'=> 'Tốt cho sức khoẻ',
       'image'=> './public/images/MON MOI.jpeg'
    ),
    );
    
   $products = array();
   array_push($products,array(
       'id'=>1,
       'name'=>'1 bánh trứng',
       'image'=>'./public/images/MON MOI 1.png',
       'price'=>'18000đ'
    ),
    array(
       'id'=>2,
       'name'=>'1 bánh trứng',
       'image'=>'./public/images/MON MOI 1.png',
        'price'=>'18000đ'
    ),
    array(
       'id'=>3,
       'name'=>'1 bánh trứng',
       'image'=>'./public/images/MON MOI 1.png',
        'price'=>'18000đ'
    ),
    array(
       'id'=>4,
       'name'=>'1 bánh trứng',
       'image'=>'./public/images/MON MOI 1.png',
        'price'=>'18000đ'
    ),    
    );
    $data = array('products' => $products, 'category' => $category,'banner'=> $banner,'productsLike' => $productsLike);
    $this->render('home', $data);
  }
  public function login() {
      $this->render('viLogin');
  }
  public function logout() {
      $this->render('viLogout');
  }
}