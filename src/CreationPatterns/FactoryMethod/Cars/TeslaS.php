<?php
namespace PHPpatterns\CreationPatterns\FactoryMethod\Cars;

use PHPpatterns\CreationPatterns\FactoryMethod\Interfaces\CarInterface;

class TeslaS extends CarInterface {
  function __construct() 
  {
    $this->name = 'Tesla S';
  }
}