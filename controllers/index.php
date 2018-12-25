<?php

class Index extends Controller {
  function __construct() {
    parent::__construct();
    $this->view->msg = 'Welcome to the index';
    $this->view->render('index/index');
  }
}
