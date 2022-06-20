<?php
namespace DesignPatterns\Creation\FactoryMethod\Cars;

use DesignPatterns\Creation\FactoryMethod\Contracts\CarInterface;

class TeslaS extends CarInterface {
  function __construct() 
  {
    $this->name = 'Tesla S';
  }
}