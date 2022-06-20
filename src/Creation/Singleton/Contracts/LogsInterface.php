<?php
 
namespace DesignPatterns\Creation\Singleton\Contracts;

interface LogsInterface {
  public static function getInstance(): self;
  public function puts(string $datas): void;
  public function get(): ?string;
  public function clear(): void;
}