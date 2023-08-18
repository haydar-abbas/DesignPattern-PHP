<?php

namespace src;

class UserImp extends User
{
    public function __construct(ChatMediator $med, string $name)
    {
        parent::__construct($med, $name);
    }

    public function send(string $msg): void
    {
        printf("%s : Sending Message: %s\n", $this->name, $msg);
        echo "----------------------------\n";
        $this->mediator->sendMessage($msg, $this);
    }

    public function receive(string $msg): void
    {
        printf("%s : Received Message: %s\n", $this->name, $msg);
    }
}
