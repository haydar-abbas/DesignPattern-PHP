<?php

namespace src;

class OnCommand implements Command
{
    private Devices $device;

    public function __construct(Devices $device)
    {
        $this->device = $device;
    }

    public function execute(): void
    {
        $this->device->on();
    }
}
