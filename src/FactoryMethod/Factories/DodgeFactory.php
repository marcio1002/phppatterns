<?php

namespace PHPpatterns\FactoryMethod\Factories;

use
  PHPpatterns\FactoryMethod\Interfaces\CarInterface,
  PHPpatterns\FactoryMethod\Interfaces\FactoryInterface;

class DodgeFactory implements FactoryInterface {
  const CHARGER = 'charger';
  const DART = 'dart';
  
  private array $models = [
    "charger" => 'PHPpatterns\FactoryMethod\Cars\DodgeCharger',
    "dart" => 'PHPpatterns\FactoryMethod\Cars\DodgeDart'
  ];
  
  public function createCar(string $model): CarInterface
  {
    if(!array_key_exists($model, $this->models)) 
      throw new \InvalidArgumentException("$model not  class");
    
    return new $this->models[$model];
    
  }
}