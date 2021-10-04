<?php
namespace PHPpatterns\CreationPatterns\FactoryMethod\Cars;

use PHPpatterns\CreationPatterns\FactoryMethod\Interfaces\CarInterface;

class DodgeCharger extends CarInterface {
  function __construct() 
  {
    $this->name = 'Dodge Charger';
  }
}