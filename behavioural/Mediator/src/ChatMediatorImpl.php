<?php

namespace src;


class ChatMediatorImpl implements ChatMediator
{
    private $users;

    public function __construct()
    {
        $this->users = new \ArrayObject();
    }

    public function sendMessage(string $msg, User $user): void
    {
        foreach ($this->users as $u) {
            if ($u != $user) {
                //  message should not be received by the user sending it
                $u->receive($msg);
            }
        }
        echo "\n";
    }

    public function addUser(User $user): void
    {
        $this->users->append($user);
    }
}
