<?php

namespace DesignPatterns\Behavioral\Strategy\Contracts;

use Helpers\Console;

abstract class Compression
{
    abstract public function compress(string $destination): bool;

    public function renameFilesSort(): void
    {
        Console::log('Renamed Files in order' . PHP_EOL, Console::FG_GREEN);
    }
}