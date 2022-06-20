<?php

namespace DesignPatterns\Behavioral\Observer\Contracts;

interface ObserverInterface 
{
    public function update(string $code): void;
}