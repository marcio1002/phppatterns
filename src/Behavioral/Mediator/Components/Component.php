<?php

namespace DesignPatterns\Behavioral\Mediator\Components;

use DesignPatterns\Behavioral\Mediator\Mediators\MediatorInterface;

abstract class Component
{

    public function __construct(protected MediatorInterface $mediator)
    {
    }
}