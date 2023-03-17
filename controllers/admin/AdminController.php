<?php

/**
 * 
 */
class AdminController extends Controller
{
    function __construct()
	{
		$this->folder = "admin";
		if(!isset($_SESSION['admin'])){
			header("Location: http://localhost/QuickSnacks/admin");
		}
	}

    function valid() {
        if(!isset($_SESSION['admin'])){
			header("Location: http://localhost/QuickSnacks/admin");
		}
    }
}