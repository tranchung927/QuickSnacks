<?php
require_once 'config/config.php';
require_once 'vendor/Controller.php';

session_start();

if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'pages';
  $action = 'home';
}
require_once('routes.php');