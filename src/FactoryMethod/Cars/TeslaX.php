<?php
namespace PHPpatterns\FactoryMethod\Cars;

use PHPpatterns\FactoryMethod\Interfaces\CarInterface;

class TeslaX extends CarInterface {
  function __construct() 
  {
    $this->name = 'Tesla X';
  }
}