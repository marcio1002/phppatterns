<?php

namespace PHPpatterns\CreationPatterns\Builder\Foguetes;

use PHPpatterns\CreationPatterns\Builder\Interfaces\FogueteBuild;

class FogueteModelo1 extends FogueteBuild {


    public function buildModel(): self
    {
        $this->foguete->model = 'Foguete modelo 1';

        return $this;
    }

    public function buildEngines(): self
    {
        $this->foguete->engines = 4;

        return $this;
    }

    public function buildFuels(): self
    {
        $this->foguete->fuels = 850;

        return $this;
    }

    public function buildSeats(): self
    {
        $this->foguete->seats = 4;

        return $this;
    }
}