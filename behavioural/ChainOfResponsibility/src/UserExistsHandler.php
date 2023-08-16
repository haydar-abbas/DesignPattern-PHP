<?php

namespace src;

class UserExistsHandler extends Handler
{
    public function __construct(private DataBase $db) {}

    public function handle(string $username, string $passwd): bool
    {
        if (!$this->db->isValidUser($username)) {
            echo "This user is not registered!\n";
            echo "Sign up to out app now.\n";
            return false;
        }
        return $this->handleNext($username, $passwd);
    }
}
