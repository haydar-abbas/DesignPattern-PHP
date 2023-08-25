<?php

namespace src;

class Light implements Devices
{
    public string $name = "Light";

    public function on(): void
    {
        echo $this->name . " is ON!\n";
    }

    public function off(): void
    {
        echo $this->name . " is OFF!\n";
    }
}
