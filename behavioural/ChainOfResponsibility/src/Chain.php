<?php

namespace src;

interface Chain
{
    public function setNextChain(Chain $next_chain): void;
    public function calculate(Numbers $request): void;
}
