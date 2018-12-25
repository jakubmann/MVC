<?php

class Help extends Controller {
  public function __construct() {
    parent::__construct();
    echo 'You screamed for help.';
    echo 'Nobody answered.';
  }
  public function other($what = 'No') {
    echo $what;

    require  'models/help_model.php';
    $model = new Help_Model();
  }
}
