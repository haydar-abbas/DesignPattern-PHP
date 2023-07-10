<?php

namespace src;

class MobileContext {

    private IState $state;

    public function __construct(IState $state) {
        $this->state = $state;
    }

    public function setState(IState $state) {
        $this->state = $state;
    }

    public function alert() {
        $this->state->alert();
    }

}
