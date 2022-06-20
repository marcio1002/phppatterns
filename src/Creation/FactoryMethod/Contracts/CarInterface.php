<?php
namespace DesignPatterns\Creation\FactoryMethod\Contracts;

use Helpers\Console;

abstract class CarInterface {
  
  protected string $name;
  
  public function accelerate(): void 
  {
    Console::log("Accelerate {$this->name}" . PHP_EOL, Console::FG_WHITE);
  }
  
  public function shiftMacha(): void
  {
    Console::log( "Shift macha {$this->name}" . PHP_EOL, Console::FG_YELLOW);
  }
  
  public function brake(): void
  {
    Console::log("Break {$this->name}" . PHP_EOL, Console::FG_RED);
  }
}