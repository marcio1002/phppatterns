<?php

namespace DesignPatterns\Structural\Composite\Components;

use DesignPatterns\Structural\Composite\Contracts\Graphic;
use Helpers\Console;

class Circle implements Graphic
{
    private int $x;
    private int $y;
    private int $radius;

    public function __construct(int $x, int $y, int $radius)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function move(int $x, int $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function draw(): void
    {
        echo Console::log("Circle({$this->x},{$this->y},{$this->radius})\n", Console::FG_GREEN, Console::BOLD);
    }
}