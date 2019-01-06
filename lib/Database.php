<?php
class Database extends PDO{
  public function __construct() {
    parent::__construct(
      'mysql:host=localhost;dbname=slum',
      'slum',
      '5SbtycTh4R7a3nQp'
    );
  }
}
