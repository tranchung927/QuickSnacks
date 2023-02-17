<?php

class ErrorController extends Controller {
  function __construct() {
    $this->folder = 'error';
  }
  
  public function notFound() {
      $this->render('404');
  }
}