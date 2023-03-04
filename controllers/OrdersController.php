<?php

class OrdersController extends Controller {

    function __construct() {
        $this->folder = 'default';
    }

    public function index() {
        $orders = array();
        array_push($orders, array(
            'id' => 1,
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000d',
            'name' => 'bánh trứng'
                ),
        );
        $products = array();
        array_push($products, array(
            'id' => 1,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ),
                array(
                    'id' => 2,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
                array(
                    'id' => 3,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
        );
        $data = array('orders' => $orders,'products'=>$products);
        $this->render('orders', $data);
    }

}
