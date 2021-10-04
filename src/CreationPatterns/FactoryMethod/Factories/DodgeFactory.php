<?php

namespace PHPpatterns\CreationPatterns\FactoryMethod\Factories;

use
  PHPpatterns\CreationPatterns\FactoryMethod\Interfaces\CarInterface,
  PHPpatterns\CreationPatterns\FactoryMethod\Interfaces\FactoryInterface;

class DodgeFactory implements FactoryInterface {
  const CHARGER = 'charger';
  const DART = 'dart';
  
  private array $models = [
    "charger" => 'PHPpatterns\CreationPatterns\FactoryMethod\Cars\DodgeCharger',
    "dart" => 'PHPpatterns\CreationPatterns\FactoryMethod\Cars\DodgeDart'
  ];
  
  public function createCar(string $model): CarInterface
  {
    if(!array_key_exists($model, $this->models)) 
      throw new \InvalidArgumentException("$model not  class");
    
    return new $this->models[$model];
    
  }
}