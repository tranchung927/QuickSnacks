<?php

class ErrorController extends Controller {
  function __construct() {
    $this->folder = 'error';
  }
  
  function notFound() {
      $this->render('404');
  }
}