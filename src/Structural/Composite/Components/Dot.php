<?php

namespace DesignPatterns\Structural\Composite\Components;

use DesignPatterns\Structural\Composite\Contracts\Graphic;
use Helpers\Console;

class Dot implements Graphic
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move(int $x, int $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function draw(): void
    {
        echo Console::log("Dot({$this->x},{$this->y})\n", Console::FG_GREEN, Console::BOLD);
    }
}