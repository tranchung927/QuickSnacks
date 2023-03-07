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
        require_once 'models/AddressModel.php';
        require_once 'models/CityModel.php';
        require_once 'models/DistrictModel.php';

        if (isset($_SESSION['user']['address_id'])) {
            $address = (new AddressModel)->getById($_SESSION['user']['address_id']);
            $address["city"] = "Hà Nội";
            if (isset($address["district_id"])) {
                $address["district"] = (new DistrictModel)->getById($address["district_id"])["name"];
            }
            $data = array(
                "delivery_fee" => 30000,
                "address" => $address
            );
        } else {
            $data = array(
                "delivery_fee" => 30000
            );
        }
        $this->render('cart', $data);
    }

    function updateCart()
    {
        $quantity = $_POST['quantity'];
        $index = $_POST['index'];
        $_SESSION['cart'][$index]['quantity'] = $quantity;
        $totalQuantity = 0;
        $total = 0;
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            $totalQuantity += $_SESSION['cart'][$i]['quantity'];
            $total += ($_SESSION['cart'][$i]['price'] * $_SESSION['cart'][$i]['quantity']);
        }
        echo '{"subtotal":' . $total . ',"total":' . ($total + 30000) . ',"total_quantity":' . $totalQuantity . ',"delivery_charge":30000}';
    }

    function deleteItem()
    {
        array_splice($_SESSION['cart'], array_search($_POST['product_id'], array_column($_SESSION['cart'], 'id')), 1);
        return true;
    }

    function create()
    {
        require_once 'vendor/Model.php';
        require_once 'models/OrderModel.php';
        require_once 'models/AddressModel.php';
        if (empty($_SESSION["user"])) {
            echo '{"code":1, "message":""}';
            return false;
        }
        if (empty($_SESSION["user"]["address_id"])) {
            echo '{"code":2, "message":"Please enter your delivery address."}';
            return false;
        }
        $md = new OrderModel;
        if ($md->createOrder($_SESSION["user"]["id"], $_SESSION["user"]["address_id"], $_SESSION["cart"])) {
            unset($_SESSION['cart']);
            echo '{"code":0, "message":""}';
            return true;
        }
        echo '{"code":3, "message":"An error occurred, please try again later."}';
        return false;
    }

    function address()
    {
        require_once 'vendor/Model.php';
        require_once 'models/AddressModel.php';
        require_once 'models/DistrictModel.php';

        if (empty($_SESSION["user"])) {
            return false;
        }

        $firstName;
        $lastName;
        $phone;
        $cityName = "Hà Nội";
        $districtName;
        $fullAddress;

        if (isset($_SESSION['user']['address_id'])) {
            $address = (new AddressModel)->getById($_SESSION['user']['address_id']);
            $firstName = $address["first_name"];
            $lastName = $address["last_name"];
            $phone = $address["phone"];
            if (isset($address["district_id"])) {
                $districtName = (new DistrictModel)->getById($address["district_id"])["name"];
            }
            $fullAddress = $address["address"];
        } else {
            $firstName = $_SESSION['user']["first_name"];
            $lastName = $_SESSION['user']["last_name"];
            $phone = $_SESSION['user']["phone"];
        }
        $districts = (new DistrictModel)->getByCityId(1);
        require_once 'views/default/address.php';
    }

    function complete()
    {
        $this->render('order_complete');
    }
}
