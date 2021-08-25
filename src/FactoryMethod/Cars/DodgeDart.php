<?php
namespace PHPpatterns\FactoryMethod\Cars;

use PHPpatterns\FactoryMethod\Interfaces\CarInterface;

class DodgeDart extends CarInterface {
  function __construct() 
  {
    $this->name = 'Dodge Dart';
  }
}