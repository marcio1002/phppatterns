<?php

namespace DesignPatterns\Creation\FactoryMethod\Factories;

use 
  DesignPatterns\Creation\FactoryMethod\Interfaces\FactoryInterface,
  DesignPatterns\Creation\FactoryMethod\Interfaces\CarInterface;


class TeslaFactory implements FactoryInterface {
  const TESLA_X = 'teslaX';
  const TESLA_S = 'teslaS';
  
  private array $models = [
    'teslaX' => 'DesignPatterns\Creation\FactoryMethod\Cars\TeslaX',
    'teslaS' => 'DesignPatterns\Creation\FactoryMethod\Cars\TeslaS'
  ];
  
  public function createCar(string $model): CarInterface
  {
    if(!array_key_exists($model, $this->models)) 
      throw new \InvalidArgumentException("$model not  class");
        
    return new $this->models[$model];
  }
}