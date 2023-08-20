<?php

namespace src;

interface ItemElement
{
    public function accept(Visitor $visitor): int;
}
