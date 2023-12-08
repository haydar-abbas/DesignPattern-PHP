<?php

namespace src;

class DivideNumbers implements Chain
{
    private Chain $next_in_chain;

    public function setNextChain(Chain $next_chain): void
    {
        $this->next_in_chain = $next_chain;
    }

    public function calculate(Numbers $request): void
    {
        if ($request->getOperation() == '/') {
            printf("%d / %d = %d\n", $request->getNumOne(), $request->getNumTwo(), ($request->getNumOne() / $request->getNumTwo()));
        } else {
            echo "Only works for add, sub, mult and div\n";
        }
    }
}