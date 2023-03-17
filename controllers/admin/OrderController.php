<?php

/**
 * 
 */

require_once "AdminController.php";
class OrderController extends AdminController
{

    function index()
    {
        $this->valid();
        require_once '../vendor/Model.php';
        require_once '../models/OrderModel.php';
        $md = new OrderModel;
        $data = $md->getAll();
        $this->render('order', $data, 'GIAO DỊCH', 'admin');
    }

    function updateState()
    {
        $this->valid();
        $slt = $state = '';
        if (isset($_GET['selected'])) {
            $slt = $_GET['selected'];
        }
        if (isset($_GET['state'])) {
            $state = $_GET['state'];
        }
        if ($slt == '') {
            echo "Bạn chưa chọn giao dịch!";
        }
        require_once '../vendor/Model.php';
        require_once '../models/OrderModel.php';
        $md = new OrderModel;
        for ($i = 0; $i < count($slt); $i++) {
            switch ($state) {
                case 'shipped':
                    $md->updateStatusById($slt[$i], 'delivered');
                    break;
                case 'unshipped':
                    $md->updateStatusById($slt[$i], 'waiting');
                    break;
                case 'del':
                    $md->deleteById($slt[$i]);
                    break;
                case 'cancel':
                    $md->updateStatusById($slt[$i], 'cancel');
                    break;
                default:
                    echo "Error!";
                    break;
            }
        }
        echo "OK";
    }
}
