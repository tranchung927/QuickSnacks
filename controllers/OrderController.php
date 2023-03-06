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
            $position = array_search($productId, array_column($_SESSION['cart'], 'id'));
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
        $data = array(
            "delivery_fee" => 30000
        );
        $this->render('cart', $data);
    }

    function updateCart() {
        $quantity = $_POST['quantity'];
        $index = $_POST['index'];
        $_SESSION['cart'][$index]['quantity'] = $quantity;
        $totalQuantity = 0;
        $total = 0;
        for ($i=0; $i < count($_SESSION['cart']); $i++) { 
            $totalQuantity += $_SESSION['cart'][$i]['quantity'];
            $total += ($_SESSION['cart'][$i]['price'] * $_SESSION['cart'][$i]['quantity']);
        }
        echo '{"subtotal":'.$total.',"total":'.($total+30000).',"total_quantity":'.$totalQuantity.',"delivery_charge":30000}';
    }

    function deleteItem() {
        array_splice($_SESSION['cart'], array_search($_POST['product_id'], array_column($_SESSION['cart'], 'id')), 1);
        return true;
    }
}
