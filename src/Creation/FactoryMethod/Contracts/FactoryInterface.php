<?php

namespace DesignPatterns\Creation\FactoryMethod\Contracts;

interface FactoryInterface {
  public function createCar(string $model): CarInterface;
}