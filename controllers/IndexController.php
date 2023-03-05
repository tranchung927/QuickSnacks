<?php

class IndexController extends Controller
{

    function __construct()
    {
        $this->folder = 'default';
    }

    function index()
    {
        require_once("vendor/Model.php");
        require_once("models/CategoryModel.php");
        require_once("models/ProductModel.php");

        $banners = array();
        array_push(
            $banners,
            array('image' => './public/images/carousel_1.jpeg'),
            array('image' => './public/images/carousel-2.jpeg'),
            array('image' => './public/images/carousel-3.jpeg')
        );

        $categories = (new CategoryModel)->getAll() ?: array();
        $products = (new ProductModel)->getByCategoryId(2, 1, 4) ?: array();
        array_unshift(
            $categories,
            array(
                'id' => -1,
                'name' => 'Món mới',
                'image' => 'newfood.png'
            )
        );
        $data = array(
            'products' => $products,
            'categories' => $categories,
            'category' => array(
                'name' => 'CÓ THỂ BẠN SẼ THÍCH MÓN NÀY',
            ),
            'banners' => $banners,
            'isLogin' => isset($_SESSION['user'])
        );
        $this->render('index', $data);
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
