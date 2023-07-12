<?php

namespace src;

abstract class ADuck implements \src\FlyBehavior\IFlyBehavior {

    protected $name;
    protected FlyBehavior\IFlyBehavior $flyBehavior;

    public function fly(): string {
        return "I am " . $this->name . ", I can " . $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehavior\IFlyBehavior $flyBehavior): void {
        $this->flyBehavior = $flyBehavior;
    }

}
