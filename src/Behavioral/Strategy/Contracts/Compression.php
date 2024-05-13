<?php

namespace DesignPatterns\Behavioral\Strategy\Contracts;

use Helpers\Console;

abstract class Compression
{
    abstract public function compress(string $destination): bool;
}