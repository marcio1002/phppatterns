<?php

namespace DesignPatterns\Structural\Bridge\RemoteControls;

use DesignPatterns\Structural\Bridge\Contracts\DeviceContract;
use Helpers\Console;

class Remote
{
    protected DeviceContract $device;

    public function __construct(DeviceContract $device)
    {
        $this->device = $device;
    }

    public function info(): void
    {
        Console::log(
            "Power: {$this->device->isEnabled()}\nVolume: {$this->device->getVolume()}\nChannel: {$this->device->getChannel()}\n\n",
            Console::FG_GREEN_LIGHT,
            Console::BOLD
        );
    }

    public function togglePower(): void
    {
        $this->device->isEnabled() ? $this->device->disabled() : $this->device->enabled();
    }

    public function volumeDown(): void
    {
        $this->device->setVolume($this->device->getVolume() - 1);   
    }

    public function volumeUp(): void
    {
        $this->device->setVolume($this->device->getVolume() + 1);
    }

    public function channelDown(): void
    {
        $this->device->setChannel($this->device->getChannel() - 1);
    }

    public function channelUp(): void
    {
        $this->device->setChannel($this->device->getChannel() + 1);
    }
}