<?php

namespace src;

interface ChatMediator
{
    public function sendMessage(string $msg, User $user): void;
    public function addUser(User $user): void;
}
