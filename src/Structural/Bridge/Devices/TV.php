<?php

namespace DesignPatterns\Structural\Bridge\Devices;

use DesignPatterns\Structural\Bridge\Contracts\DeviceContract;

class TV implements DeviceContract
{

    protected int $volume = 5;
    protected int $channel = 8;
    protected bool $enabled = false;

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function enabled(): void
    {
        $this->enabled = true;
    }

    public function disabled(): void
    {
        $this->enabled = false;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setChannel(int $channel): void
    {
        $this->channel = $channel;
    }
}