<?php

namespace src;

class ValidPasswordHandler extends Handler
{
    public function __construct(private DataBase $db) {}

    public function handle(string $username, string $passwd): bool
    {
        if (!$this->db->isValidPasswd($username, $passwd)) {
            echo "Wrong password!\n";
            return false;
        }
        return $this->handleNext($username, $passwd);
    }
}
