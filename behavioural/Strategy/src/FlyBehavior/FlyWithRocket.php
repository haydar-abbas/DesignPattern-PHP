<?php

namespace src\FlyBehavior;

class FlyWithRocket implements IFlyBehavior
{
    public function fly(): string
    {
        return "Fly with Rocket!!\n";
    }
}
