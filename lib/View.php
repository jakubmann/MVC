<?php

class View {
  public function __construct() {
    echo 'This da view.';
  }
  public function render($name) {
    require 'views/' . $name . '.php';
  }
}
