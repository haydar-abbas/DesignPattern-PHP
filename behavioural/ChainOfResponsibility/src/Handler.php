<?php

namespace src;

abstract class Handler
{
    private ?Handler $next = null;

    public function setNextHandler(Handler $next): Handler
    {
        $this->next = $next;
        return $this->next;
    }

    public abstract function handle(string $username, string $passwd): bool;

    public function handleNext(string $username, string $passwd): bool
    {
        if ($this->next == null) {
            return true;
        }
        return $this->next->handle($username, $passwd);
    }

}
