<?php

/**
 * 
 */

require_once "AdminController.php";
class IndexController extends AdminController
{

	function __construct()
	{
		$this->folder = "admin";
	}

	function index()
	{
		require_once '../views/admin/index.php';
	}

	function dashboard()
	{
		$this->valid();
		require_once '../vendor/Model.php';
		require_once '../models/OrderModel.php';
		require_once '../models/AccountModel.php';
		require_once '../models/ProductModel.php';
		
		$todayOrders = (new OrderModel)->getTotalToday() ?? 0;
        $todayMembers = (new AccountModel)->getTotalToday() ?? 0;
		$totalProducts = (new ProductModel)->getTotal() ?? 0;
		$totalMembers = (new AccountModel)->getTotal() ?? 0;
        $data = array(
            'todayOrders' => $todayOrders,
            'todayMembers' => $todayMembers,
            'totalProducts' => $totalProducts,
			'totalMembers' => $totalMembers
        );

		$this->render('dashboard', $data, null, 'admin');
	}
	function login()
	{
		require_once '../vendor/Model.php';
		require_once '../models/AccountModel.php';
		$md = new AccountModel;
		$data = array();
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username == "" || $password == "") {
			echo "Tài khoản và mật khẩu không được để trống!";
			return 0;
		}
		$data = array();
		$data = $md->getUserByUsername($username);
		if ($data != false && sha1($password) == $data['password'] && $data['role'] == '1') {
			echo "LoginSuccess";
			$_SESSION['user'] = $data;
			$_SESSION['admin'] = $data;
			return true;
		} else {
			echo "Sai tên tài khoản hoặc mật khẩu!";
		}
	}
	function logout()
	{
		session_unset();
		session_destroy();
		unset($_SESSION['admin']);
		unset($_SESSION['user']);
		return true;
	}
}
