<?php

namespace src\FlyBehavior;

class FlyWithWings implements \src\FlyBehavior\IFlyBehavior {

    public function fly(): string {
        return "Fly with Wings!!\n";
    }

}
