<?php

namespace src;

class Remote {

    private array $on_command;
    private array $off_command;

    public function __construct() {
        $this->on_command = [];
        $this->off_command = [];
    }

    public function addCommand(int $slot, ICommand $on, ICommand $off): void {
        $this->on_command[$slot] = $on;
        $this->off_command[$slot] = $off;
    }

    public function onBtnPress(int $slot): void {
        $this->on_command[$slot]->execute();
    }

    public function offBtnPress(int $slot): void {
        $this->off_command[$slot]->execute();
    }
}
