<?php

/**
* 
*/
require_once "AdminController.php";
class AnalyticsController extends AdminController
{
	
	function index(){
		require_once '../vendor/Model.php';
		/*require_once '../models/AccountModel.php';
		$md = new AccountModel;
		$data = $md->getAllMembers();*/
		$this->render('analytics',array(),'ANALYTICS','admin');
	}
	function memberAnalytics(){
		require_once '../vendor/Model.php';
		/*require_once '../models/AccountModel.php';
		$md = new AccountModel;
		$data = $md->getAllMembers();*/
		$this->render('memberAnalytics',array(),'MEMBER ANALYTICS','admin');
	}
}