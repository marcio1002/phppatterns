<?php

namespace DesignPatterns\Structural\Bridge\Contracts;

interface DeviceContract
{

    public function isEnabled(): bool;
    public function enabled(): void;
    public function disabled(): void;
    public function getVolume(): int;
    public function setVolume(int $volume): void;
    public function getChannel(): int;
    public function setChannel(int $channel): void;
}