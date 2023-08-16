<?php

namespace src;

class AuthService
{
    public function __construct(private Handler $handler) {}

    public function logIn(string $username, string $passwd)
    {
        if ($this->handler->handle($username, $passwd)) {
            echo "Authorization was successful!\n";
            //  Do stuff for authorized users
            return true;
        }
        return false;
    }
}
