<?php

namespace DesignPatterns\Behavioral\Observer\Observers;

use 
    DesignPatterns\Behavioral\Observer\Interfaces\ObserverInterface,
    Helpers\Console;

class EmailObserver implements ObserverInterface
{
    public function update(string $code): void
    {
        Console::log("Email enviado com código: $code\n", Console::FG_GREEN);
    }
}