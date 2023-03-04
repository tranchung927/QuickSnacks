<?php

class IndexController extends Controller
{

    function __construct()
    {
        $this->folder = 'default';
    }

    function index()
    {
        $banners = array();
        array_push(
            $banners,
            array('image' => './public/images/carousel_1.jpeg'),
            array('image' => './public/images/carousel-2.jpeg'),
            array('image' => './public/images/carousel-3.jpeg')
        );

        $categories = array();
        array_push(
            $categories,
            array(
                'id' => 1,
                'name' => 'Món mới',
                'image' => './public/images/MON MOI.jpeg'
            ),
            array(
                'id' => 2,
                'name' => 'Đồ ăn nhẹ',
                'image' => './public/images/MON MOI.jpeg'
            ),
            array(
                'id' => 3,
                'name' => 'Sinh tố',
                'image' => './public/images/MON MOI.jpeg'
            ),
            array(
                'id' => 4,
                'name' => 'Dành cho trẻ em',
                'image' => './public/images/MON MOI.jpeg'
            ),
            array(
                'id' => 5,
                'name' => 'Tốt cho sức khoẻ',
                'image' => './public/images/MON MOI.jpeg'
            ),
        );

        $products = array();
        array_push(
            $products,
            array(
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
            array(
                'id' => 4,
                'name' => '1 bánh trứng',
                'image' => './public/images/MON MOI 1.png',
                'price' => '18000đ'
            ),
        );
        $data = array(
            'products' => $products,
            'categories' => $categories,
            'banners' => $banners,
            'isLogin' => isset($_SESSION['cart'])
        );
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
