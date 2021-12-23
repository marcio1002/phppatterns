<?php

namespace DesignPatterns\Behavioral\Observer\Observers;

use 
    DesignPatterns\Behavioral\Observer\Interfaces\ObserverInterface,
    Helpers\Console;

class PurchaseControlObserver implements ObserverInterface
{
    public function update(string $code): void
    {
        Console::log("Controle de estoque do produto: $code\n", Console::FG_GREEN);
    }
}