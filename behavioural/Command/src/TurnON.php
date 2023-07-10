<?php

namespace src;

class TurnON implements ICommand {

    private IElectrical $electrical;

    public function __construct(IElectrical $electrical) {
        $this->electrical = $electrical;
    }

    public function execute() {
        $this->electrical->on();
    }

}
