<?php
namespace PHPpatterns\CreationPatterns\FactoryMethod\Cars;

use PHPpatterns\CreationPatterns\FactoryMethod\Interfaces\CarInterface;

class TeslaX extends CarInterface {
  function __construct() 
  {
    $this->name = 'Tesla X';
  }
}