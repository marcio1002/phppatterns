<?php

namespace PHPpatterns\Singleton;

class Logs implements LogsInterface {
  private static Logs $instance;
  private string $fileLogs;
  
  private function __construct() {
    $this->fileLogs = __DIR__ . '/logs.txt';
  }
  
  private function __clone() {}
  
  public static function getInstance(): static
  {
    if(empty(static::$instance)) static::$instance = new static();
    
    return static::$instance;
  }

  public function puts(string $data): void 
  {
    file_put_contents($this->fileLogs, $data . "\n", FILE_APPEND | LOCK_EX);
  }
  
  public function get(): ?string
  {
    if(file_exists($this->fileLogs) && filesize($this->fileLogs) > 0)
      return file_get_contents($this->fileLogs, true);
    
    return null;
  }
  
  public function clear(): void
  {
    $hand = fopen($this->fileLogs, 'wb');
    fwrite($hand, '', 0);
    fclose($hand);
  }
}