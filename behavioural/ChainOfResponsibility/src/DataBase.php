<?php

namespace src;

class DataBase
{
    private $users;

    public function __construct()
    {
        $this->users = [
            "Haydar" => "admin",
            "Abbas" => "user",
        ];
    }

    public function isValidUser(string $username)
    {
        return array_key_exists($username, $this->users);
    }

    public function isValidPasswd(string $username, string $passwd)
    {
        return $this->users[$username] === $passwd;
    }
}
