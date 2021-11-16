<?php

namespace DesignPatterns\Creation\FactoryMethod\Factories;

use
  DesignPatterns\Creation\FactoryMethod\Interfaces\CarInterface,
  DesignPatterns\Creation\FactoryMethod\Interfaces\FactoryInterface;

class DodgeFactory implements FactoryInterface {
  const CHARGER = 'charger';
  const DART = 'dart';
  
  private array $models = [
    "charger" => 'DesignPatterns\Creation\FactoryMethod\Cars\DodgeCharger',
    "dart" => 'DesignPatterns\Creation\FactoryMethod\Cars\DodgeDart'
  ];
  
  public function createCar(string $model): CarInterface
  {
    if(!array_key_exists($model, $this->models)) 
      throw new \InvalidArgumentException("$model not  class");
    
    return new $this->models[$model];
    
  }
}