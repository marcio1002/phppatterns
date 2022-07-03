<?php

namespace DesignPatterns\Structural\Composite\Contracts;

interface Graphic
{
    public function move(int $x, int $y);
    public function draw();
}