<?php

class View {
  public function __construct() {
    echo 'MAIN VIEW';
  }
  public function render($name, $include = true) {
    if ($include == true) {
      require 'views/header.php';
      require 'views/' . $name . '.php';
      require 'views/footer.php';
    }
    else {
      require 'views/' . $name . '.php';
    }
  }
}
