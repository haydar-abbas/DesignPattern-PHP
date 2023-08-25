<?php

namespace src;

class Fan implements Devices
{
    public string $name = "Fan";

    public function off(): void
    {
        echo $this->name . " is rotating..!\n";
    }

    public function on(): void
    {
        echo $this->name . " is not rotating..!\n";
    }
}
