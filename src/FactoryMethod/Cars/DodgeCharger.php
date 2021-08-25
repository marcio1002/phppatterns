<?php
namespace PHPpatterns\FactoryMethod\Cars;

use PHPpatterns\FactoryMethod\Interfaces\CarInterface;

class DodgeCharger extends CarInterface {
  function __construct() 
  {
    $this->name = 'Dodge Charger';
  }
}