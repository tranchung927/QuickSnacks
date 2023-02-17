<?php

class HomeController extends Controller {
  function __construct() {
    $this->folder = 'default';
  }

  public function index() {
    $data = array(
      'name' => 'Chung',
      'age' => 29
    );
    $this->render('home', $data);
  }
}