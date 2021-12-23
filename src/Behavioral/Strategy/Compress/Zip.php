<?php

namespace DesignPatterns\Behavioral\Strategy\Compress;

use 
    DesignPatterns\Behavioral\Strategy\Interfaces\Compression,
    Helpers\Console;

class Zip extends Compression
{
    public function compress(string $destination): bool
    {
        Console::log('Compressed of ".ZIP" format' . PHP_EOL, Console::FG_YELLOW);
        return true;
    }

}