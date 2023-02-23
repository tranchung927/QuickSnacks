<?php

class MenuController extends Controller {
  function __construct() {
    $this->folder = 'default';
  }

  public function index() {
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
       'id'=>2,
       'name'=>'1 bánh trứng',
       'image'=>'./public/images/MON MOI 1.png',
        'price'=>'18000đ'
    ),     
    );
   
    $cateTitle = array();
    array_push($cateTitle,array(
        'id'=>1,
        'name' => 'Món Mới'
    ),array(
        'id'=>2,
        'name' => 'Đồ Ăn Nhẹ'
    ),array(
        'id'=>3,
        'name' => 'Sinh Tố'
    ),array(
        'id'=>4,
        'name' => 'Dành Cho Trẻ Em'
    ),array(
        'id'=>5,
        'name' => 'Tốt Cho Sức Khoẻ'
    )     
    );
    
    $data = array('cateTitle' => $cateTitle,'products' => $products);
    $this->render('menu', $data);
  }
}
