<?php

namespace src;

class OffCommand implements Command
{
    private Devices $device;

    public function __construct(Devices $device)
    {
        $this->device = $device;
    }

    public function execute(): void
    {
        $this->device->off();
    }
}
