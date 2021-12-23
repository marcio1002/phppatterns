<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Amount
{
    abstract protected function calcImpostoVariable(float $price): float;

    private function calcFirstImpostoFixed(float $price): float
    {
        return $price * 1.3;
    }

    private function calcSecondImpostFixed(float $price): float
    {
        return $price * .85;
    }

    protected function calcImpostoDitional(float $price): float
    {
        return $price;
    }

    public function calcImpostoProduct(float $price): float
    {
        $price = $this->calcFirstImpostoFixed($price);
        $price = $this->calcSecondImpostFixed($price);
        $price = $this->calcImpostoDitional($price);
        $price = $this->calcImpostoVariable($price);
        return $price;
    }

}