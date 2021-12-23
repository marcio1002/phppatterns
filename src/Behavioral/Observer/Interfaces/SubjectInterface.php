<?php

namespace DesignPatterns\Behavioral\Observer\Interfaces;

use DesignPatterns\Behavioral\Observer\Interfaces\ObserverInterface;

interface SubjectInterface
{
    public function add(ObserverInterface $observer): void;

    public function remove(ObserverInterface $observer): bool;

    public function notify(string $code): void;
}