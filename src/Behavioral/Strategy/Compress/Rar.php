<?php

namespace DesignPatterns\Behavioral\Strategy\Compress;

use 
    DesignPatterns\Behavioral\Strategy\Interfaces\Compression,
    Helpers\Console;

class Rar extends Compression
{
    public function compress(string $destination): bool
    {
        Console::log('Compressed of ".RAR" format' . PHP_EOL, Console::FG_YELLOW);
        return true;
    }

}