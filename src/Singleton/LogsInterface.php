<?php
 
namespace PHPpatterns\Singleton;

interface LogsInterface {
  public static function getInstance(): static;
  public function puts(string $datas): void;
  public function get(): ?string;
  public function clear(): void;
}