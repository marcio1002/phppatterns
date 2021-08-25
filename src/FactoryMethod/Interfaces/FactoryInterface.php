<?php

namespace PHPpatterns\FactoryMethod\Interfaces;

interface FactoryInterface {
  public function createCar(string $model): CarInterface;
}