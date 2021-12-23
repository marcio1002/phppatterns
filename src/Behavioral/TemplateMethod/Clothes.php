<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\Amount;

class Clothes extends Amount
{
    protected function calcImpostoVariable(float $price): float
    {
        return $price * 1.15;
    }
}