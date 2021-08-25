<?php
namespace PHPpatterns\FactoryMethod\Cars;

use PHPpatterns\FactoryMethod\Interfaces\CarInterface;

class TeslaS extends CarInterface {
  function __construct() 
  {
    $this->name = 'Tesla S';
  }
}