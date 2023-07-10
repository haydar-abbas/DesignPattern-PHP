<?php

namespace src;

class TurnOFF implements ICommand {

    private IElectrical $electrical;

    public function __construct(IElectrical $electrical) {
        $this->electrical = $electrical;
    }

    public function execute() {
        $this->electrical->off();
    }

}
