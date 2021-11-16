<?php

namespace DesignPatterns\Creation\FactoryMethod\Interfaces;

interface FactoryInterface {
  public function createCar(string $model): CarInterface;
}