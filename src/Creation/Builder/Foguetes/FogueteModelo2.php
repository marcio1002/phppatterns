<?php

namespace DesignPatterns\Creation\Builder\Foguetes;

use DesignPatterns\Creation\Builder\Interfaces\FogueteBuild;

class FogueteModelo2 extends FogueteBuild {
    public function buildModel(): self
    {
        $this->foguete->model = 'Foguete modelo 2';

        return $this;
    }

    public function buildEngines(): self
    {
        $this->foguete->engines = 3;

        return $this;
    }

    public function buildFuels(): self
    {
        $this->foguete->fuels = 850;

        return $this;
    }

    public function buildSeats(): self
    {
        $this->foguete->seats = 10;

        return $this;
    }
}