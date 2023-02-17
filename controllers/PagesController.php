<?php

class PagesController extends Controller {
  function __construct() {
    $this->folder = 'pages';
  }

  public function home() {
    $data = array(
      'name' => 'Sang Beo',
      'age' => 22
    );
    $this->render('home', $data);
  }

  public function error() {
    $this->render('error');
  }
  
  public function notFound() {
      $this->render('404');
  }
}