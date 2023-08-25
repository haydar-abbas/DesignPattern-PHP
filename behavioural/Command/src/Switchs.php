<?php

namespace src;

class Switchs
{
    private array $on_command = [];
    private array $off_command = [];

    public function addCommand(string $name, Command $on, Command $off): void
    {
        $this->on_command[$name] = $on;
        $this->off_command[$name] = $off;
    }

    public function onBtnPress(string $name): void
    {
        $this->on_command[$name]->execute();
    }

    public function offBtnPress(string $name): void
    {
        $this->off_command[$name]->execute();
    }
}
