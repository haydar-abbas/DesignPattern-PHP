<?php

namespace src\FlyBehavior;

class FlyWithRocket implements \src\FlyBehavior\IFlyBehavior {

    public function fly(): string {
        return "Fly with Rocket!!\n";
    }

}
