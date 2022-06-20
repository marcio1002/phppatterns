<?php

namespace DesignPatterns\Behavioral\Strategy\Compress;

use 
    DesignPatterns\Behavioral\Strategy\Contracts\Compression,
    Helpers\Console;

class Tar extends Compression
{
    public function compress(string $destination): bool
    {
        Console::log('Compressed of ".TAR" format' . PHP_EOL, Console::FG_YELLOW);
        return true;
    }

}