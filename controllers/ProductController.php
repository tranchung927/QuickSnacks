<?php

class ProductController extends Controller
{

    function __construct()
    {
        $this->folder = 'default';
    }

    function index()
    {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        $pro = (new ProductModel)->getById($_POST['product_id']);
        require_once 'views/default/product_detail.php';
    }

    function category()
    {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        require_once 'models/CategoryModel.php';
        $category = (new CategoryModel)->getById($_GET['id']);
        $products = (new ProductModel)->getByCategoryId($_GET['id'], 1, 16) ?: array();
        $data = array(
            'products' => $products,
            'category' => $category,
            'page' => 1
        );
        $this->render('category', $data, $category["name"]);
    }

    function categories()
    {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        require_once 'models/CategoryModel.php';
        $categories = (new CategoryModel)->getAll();
        $data = array();
        for ($i=0; $i < count($categories); $i++) { 
            $products = (new ProductModel)->getByCategoryId($categories[$i]['id'], 1, 4) ?: array();
            array_push($data, array(
                'products' => $products,
                'category' => $categories[$i],
                'more' => true
            ));
        }
        $this->render('categories', $data, 'Thực đơn');
    }

    function loadmore() {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        // $products = (new ProductModel)->getByCategoryId($_GET['id'], 1, 8) ?: array();
        $products = (new ProductModel)->getByCategoryId($_GET['id'], $_GET['page'], $_GET['limit']) ?: array();
        if(empty($products)){return 0;};
        $data = array(
            'products' => $products,
            'page' => $_GET['page']
        );
        require 'views/default/products.php';
    }
}
