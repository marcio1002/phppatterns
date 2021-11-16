<?php
namespace DesignPatterns\Creation\FactoryMethod\Cars;

use DesignPatterns\Creation\FactoryMethod\Interfaces\CarInterface;

class DodgeDart extends CarInterface {
  function __construct() 
  {
    $this->name = 'Dodge Dart';
  }
}