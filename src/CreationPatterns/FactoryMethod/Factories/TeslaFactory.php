<?php

namespace PHPpatterns\CreationPatterns\FactoryMethod\Factories;

use 
  PHPpatterns\CreationPatterns\FactoryMethod\Interfaces\FactoryInterface,
  PHPpatterns\CreationPatterns\FactoryMethod\Interfaces\CarInterface;


class TeslaFactory implements FactoryInterface {
  const TESLA_X = 'teslaX';
  const TESLA_S = 'teslaS';
  
  private array $models = [
    'teslaX' => 'PHPpatterns\CreationPatterns\FactoryMethod\Cars\TeslaX',
    'teslaS' => 'PHPpatterns\CreationPatterns\FactoryMethod\Cars\TeslaS'
  ];
  
  public function createCar(string $model): CarInterface
  {
    if(!array_key_exists($model, $this->models)) 
      throw new \InvalidArgumentException("$model not  class");
        
    return new $this->models[$model];
  }
}