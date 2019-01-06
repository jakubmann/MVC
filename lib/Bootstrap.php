<?php
class Bootstrap {
  private function error() {
    require 'controllers/bad.php';
    $controller = new bad();
    $controller->index();
  }

  public function __construct() {
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);


    //print_r($url);
    if (empty($url[0])) {
      require 'controllers/index.php';
      $controller = new Index();
      $controller->index();
      return false;
    }

    $file = 'controllers/' . $url[0] . '.php';

    if (file_exists($file)) {
      require $file;
    }
    else {
      $this->error();
      return false;
    }

    $controller = new $url[0];

    if (isset($url[1])) {
      if (method_exists($controller, $url[1])) {
        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        }
        else {
          $controller->{$url[1]}();
        }
      }
      else {
        $this->error();
        return false;
      }
    }
    else {
      $controller->index();
    }
  }
}
