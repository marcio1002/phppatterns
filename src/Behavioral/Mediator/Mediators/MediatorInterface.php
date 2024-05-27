<?php

namespace DesignPatterns\Behavioral\Mediator\Mediators;

use DesignPatterns\Behavioral\Mediator\Components\Component;

interface MediatorInterface
{
    public function notify(Component $sender, string $event): void;
}