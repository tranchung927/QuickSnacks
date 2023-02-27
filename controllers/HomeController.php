<?php

class HomeController extends Controller {
  function __construct() {
    $this->folder = 'default';
  }

  public function index() {
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
    
   $productsLike = array();
   array_push($productsLike,array(
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
  
  public function showCategory() {
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
      $data = array('category'=> $Category);
      $this->render('category_detail',$data);
  }
}

 