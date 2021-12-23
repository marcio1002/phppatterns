<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\Amount;

class Electronics extends Amount
{
    protected function calcImpostoVariable(float $price): float
    {
        return $price * 1.2;
    }

    protected function calcImpostoDitional(float $price): float
    {
        return $price - ($price * 0.1);
    }
}