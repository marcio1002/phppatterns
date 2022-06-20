<?php

namespace DesignPatterns\Behavioral\Observer\Observers;

use 
    DesignPatterns\Behavioral\Observer\Contracts\ObserverInterface,
    Helpers\Console;

class EmailObserver implements ObserverInterface
{
    public function update(string $code): void
    {
        Console::log("Email enviado com código: $code\n", Console::FG_GREEN);
    }
}