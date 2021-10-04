<?php

namespace PHPpatterns\CreationPatterns\FactoryMethod\Interfaces;

interface FactoryInterface {
  public function createCar(string $model): CarInterface;
}