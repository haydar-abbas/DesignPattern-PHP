<?php

namespace src;

class Remote {

    private $on_command;
    private $off_command;
    
    public function __construct() {
        $this->on_command = array();
        $this->off_command = array();
    }

        public function addCommand(int $slot, ICommand $on, ICommand $off) {
        $this->on_command[$slot] = $on;
        $this->off_command[$slot] = $off;
    }

    function onBtnPress(int $slot) {
        $this->on_command[$slot]->execute();
    }

    function offBtnPress(int $slot) {
        $this->off_command[$slot]->execute();
    }

}
