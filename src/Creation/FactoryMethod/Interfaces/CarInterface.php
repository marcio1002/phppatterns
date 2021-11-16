<?php
namespace DesignPatterns\Creation\FactoryMethod\Interfaces;

abstract class CarInterface {
  
  protected string $name;
  
  public function accelerate(): void 
  {
    echo "Accelerate {$this->name}" . PHP_EOL;
  }
  
  public function shiftMacha(): void
  {
    echo "Shift macha {$this->name}" . PHP_EOL;
  }
  
  public function brake(): void
  {
    echo "Break {$this->name}" . PHP_EOL;
  }
}