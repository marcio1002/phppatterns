<?php

namespace DesignPatterns\Behavioral\Observer\Contracts;

use DesignPatterns\Behavioral\Observer\Contracts\ObserverInterface;

interface SubjectInterface
{
    public function add(ObserverInterface $observer): void;

    public function remove(ObserverInterface $observer): bool;

    public function notify(string $code): void;
}