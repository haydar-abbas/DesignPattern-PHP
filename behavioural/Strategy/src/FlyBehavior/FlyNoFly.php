<?php

namespace src\FlyBehavior;

class FlyNoFly implements \src\FlyBehavior\IFlyBehavior {

    public function fly(): string {
        return "No Fly!!\n";
    }

}
