<?php

namespace src\FlyBehavior;

class FlyWithWings implements IFlyBehavior
{
    public function fly(): string
    {
        return "Fly with Wings!!\n";
    }
}
