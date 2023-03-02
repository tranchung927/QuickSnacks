<?php 
session_start();

$_SESSION['login']['username']='phancupng.qt';
//
//echo "<pre>";
////print_r($SESSION);
//echo $_SESSION['login']['username'];
header('Location: index.php');
?>
