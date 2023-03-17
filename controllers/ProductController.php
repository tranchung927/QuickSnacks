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
        $pro = (new ProductModel)->getById($_GET['product_id']);
        require_once 'views/default/product_detail.php';
    }

    function category()
    {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        require_once 'models/CategoryModel.php';
        if ($_GET['id'] == '-1') {
            $products = (new ProductModel)->get(1, 16) ?? array();
            $data = array(
                'products' => $products,
                'category' => array(
                    "name" => "New Products"
                )
            );
            $this->render('category', $data, "New Products");
        } else {
            $category = (new CategoryModel)->getById($_GET['id']);
            $products = (new ProductModel)->getByCategoryId($_GET['id'], 1, 16) ?? array();
            $data = array(
                'products' => $products,
                'category' => $category
            );
            $this->render('category', $data, $category["name"]);
        }
    }

    function categories()
    {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        require_once 'models/CategoryModel.php';
        $categories = (new CategoryModel)->getAll();
        $data = array();
        for ($i = 0; $i < (count($categories) + 1); $i++) {
            if ($i == 0) {
                $products = (new ProductModel)->get(1, 4) ?? array();
                array_push($data, array(
                    'products' => $products,
                    'category' => array(
                        "id" => -1,
                        "name" => "New Products"
                    )
                ));
            } else {
                $products = (new ProductModel)->getByCategoryId($categories[$i - 1]['id'], 1, 4) ?? array();
                array_push($data, array(
                    'products' => $products,
                    'category' => $categories[$i - 1]
                ));
            }
        }
        $this->render('categories', $data, 'Thực đơn');
    }

    function loadmore()
    {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        if ($_GET['id'] == '-1') {
            $products = (new ProductModel)->get($_GET['page'], $_GET['limit']) ?? array();
        } else {
            $products = (new ProductModel)->getByCategoryId($_GET['id'], $_GET['page'], $_GET['limit']) ?? array();
        }
        if (empty($products)) {
            return 0;
        }
        for ($pIdx = 0; $pIdx < count($products); $pIdx++) {
            require "views/default/product_item.php";
        }
    }
}
