<?php

class UserController extends Controller {
    
  function __construct() {
    $this->folder = 'default';
  }

    
  public function login() {
     $this->render('login');
  }
  public function register() {
     $this->render('register');
  }
}
