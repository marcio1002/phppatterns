<?php
namespace DesignPatterns\Creation\FactoryMethod\Cars;

use DesignPatterns\Creation\FactoryMethod\Contracts\CarInterface;

class DodgeCharger extends CarInterface {
  function __construct() 
  {
    $this->name = 'Dodge Charger';
  }
}