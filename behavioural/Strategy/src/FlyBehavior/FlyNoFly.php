<?php

namespace src\FlyBehavior;

class FlyNoFly implements IFlyBehavior
{
    public function fly(): string
    {
        return "No Fly!!\n";
    }
}
