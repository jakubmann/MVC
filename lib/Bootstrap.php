<?php
class Bootstrap {
  public function __construct() {
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    print_r($url);

    $file = 'controllers/' . $url[0] . '.php';

    if (file_exists($file)) {
      require $file;
    }
    else {
      require 'controllers/bad.php';
      $controller = new bad();
      return false;
    }

    $controller = new $url[0];

    if (isset($url[1])) {
      if (isset($url[2])) {
        $controller->{$url[1]}($url[2]);
      }
      else {
        $controller->{$url[1]}();
      }
    }
  }
}
