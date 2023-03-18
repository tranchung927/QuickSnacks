<?php

/**
 * 
 */

require_once "AdminController.php";
class ProductController extends AdminController
{

	function index()
	{
		$this->valid();
		require_once '../vendor/Model.php';
		require_once '../models/ProductModel.php';
		$md = new productModel;
		$data = $md->getAll();
		$this->render('product', $data, 'SẢN PHẨM', 'admin');
	}

	function add()
	{
		$this->valid();
		require_once '../vendor/Model.php';
		require_once '../models/ProductModel.php';
		require_once '../utilities/FileManager.php';
		$md = new ProductModel;

		$price = $_POST['price'];
		$name = $_POST['name'];
		$category =  $_POST['category'];
		$element = $_POST['element'];
		$calo = $_POST['calo'];
		$desc = $_POST['desc'];
		if (isset($_FILES['image'])) {
			$imageFile = $_FILES['image'];
		} else {
			echo "Vui lòng chọn ảnh sản phẩm";
			return;
		}
		$imageName = FileManager::save($imageFile, "products/");
		if ($imageName == false) {
			echo "Đã có lỗi xảy ra!";
			return;
		}
		if (empty($price)) {
			echo "Vui lòng nhập giá sản phẩm";
			return;
		}
		if (empty($category)) {
			echo "Vui lòng chọn danh mục sản phẩm";
			return;
		}
		if (empty($element)) {
			echo "Vui lòng nhập thành phần sản phẩm";
			return;
		}
		if (empty($calo)) {
			echo "Vui lòng nhận lượng calo sản phẩm";
			return;
		}
		
		if ($md->createProduct(
			$name,
			$imageName,
			$price,
			$category,
			$element,
			$calo,
			$desc
		)) {
			echo "OK";
		};
	}
}
