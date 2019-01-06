<?php

class Login extends Controller {
  function __construct() {
    parent::__construct();
  }
  public function index() {
    $this->view->render('login/index');
    require  'models/login_model.php';
    $model = new Login_Model();
  }
}
