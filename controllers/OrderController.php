<?php

class OrderController extends Controller
{

    function __construct()
    {
        $this->folder = 'default';
    }

    function addToCart()
    {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        $data = explode(",", $_POST['masp']);
        $productId = $data[0];
        $count = $data[1];
        $product = (new ProductModel)->getById($productId);
        if (isset($_SESSION['cart'])) {
            $position = array_search($productId, array_column($_SESSION['cart'], 'product_id'));
            if ($position !== false) {
                $oldQuantity = $_SESSION['cart'][$position]['quantity'];
                $_SESSION['cart'][$position]['quantity'] = $oldQuantity + $count;
            } else {
                $product["quantity"] = $count;
                $product["orginal_price"] = $product["price"];
                $_SESSION['cart'][] = $product;
            }
            $total = array_reduce($_SESSION['cart'], function ($sum, $item) {
                $sum += $item['quantity'];
                return $sum;
            }, 0);
            echo $total;
        } else {
            $product["quantity"] = $count;
            $product["orginal_price"] = $product["price"];
            $_SESSION['cart'][] = $product;
            echo $count;
        }
    }

    function cart()
    {
        require_once 'vendor/Model.php';
        require_once 'models/ProductModel.php';
        $products = (new ProductModel)->getByCategoryId(2, 1, 4) ?: array();
        $data = array(
            "products" => $products
        );
        $this->render('cart', $data);
    }
}
