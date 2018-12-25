<?php

class Controller {
  public function __construct() {
    echo 'main controller.';
    $this->view = new View();
  }
}
