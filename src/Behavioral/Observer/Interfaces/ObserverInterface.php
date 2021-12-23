<?php

namespace DesignPatterns\Behavioral\Observer\Interfaces;

interface ObserverInterface 
{
    public function update(string $code): void;
}