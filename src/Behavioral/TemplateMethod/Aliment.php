<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\Amount;

class Aliment extends Amount
{
    protected function calcImpostoVariable(float $price): float
    {
        return $price;
    }
}