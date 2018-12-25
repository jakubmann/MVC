<?php

class bad extends Controller {
  public function __construct() {
    parent::__construct();
    echo 'An error occured.';
    $this->view->msg = 'This page doesn\'t exist';
    $this->view->render('bad/index');
  }
}
