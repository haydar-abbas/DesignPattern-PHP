<?php

namespace src;

class RoleCheckHandler extends Handler
{
    public function handle(string $username, string $passwd): bool
    {
        if ("Haydar" === $username) {
            echo "Loading Admin Page...\n";
            return true;
        }
        echo "Loading Default Page...\n";
        return $this->handleNext($username, $passwd);
    }
}
