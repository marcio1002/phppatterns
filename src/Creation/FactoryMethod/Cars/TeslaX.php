<?php
namespace DesignPatterns\Creation\FactoryMethod\Cars;

use DesignPatterns\Creation\FactoryMethod\Interfaces\CarInterface;

class TeslaX extends CarInterface {
  function __construct() 
  {
    $this->name = 'Tesla X';
  }
}