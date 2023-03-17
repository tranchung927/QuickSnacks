<?php

/**
* 
*/

require_once "AdminController.php";
class ProductController extends AdminController
{
	
	function index(){
        $this->valid();
		require_once '../vendor/Model.php';
		require_once '../models/ProductModel.php';
		$md = new productModel;
		$data = $md->getAll();
		$this->render('product',$data,'SẢN PHẨM','admin');
	}
}