<?php

class OrderController extends Controller
{

    function __construct()
    {
        $this->folder = 'default';
    }

    public function index()
    {
        $orders = array();
        array_push(
            $orders,
            array(
                'id' => 1,
                'image' => './public/images/MON MOI 1.png',
                'price' => '18000d',
                'name' => 'bánh trứng'
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
        );
        $data = array('orders' => $orders, 'products' => $products);
        $this->render('orders', $data);
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
                $_SESSION['cart'][] = array(
                    "product_id" => $productId,
                    "quantity" => $count,
                    "orginal_price" => $product["price"],
                    "price" => $product["price"]
                );
            }
            $total = array_reduce($_SESSION['cart'], function($sum, $item) {
                $sum += $item['quantity'];
                return $sum;
            }, 0);
            echo $total;
        } else {
            $_SESSION['cart'][] = array(
                "product_id" => $productId,
                "quantity" => $count,
                "orginal_price" => $product["price"],
                "price" => $product["price"]
            );
            echo $count;
        }
    }
}
