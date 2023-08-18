<?php

namespace src;

abstract class User
{
    protected ChatMediator $mediator;
    protected String $name;

    public function __construct(ChatMediator $mediator, string $name)
    {
        $this->mediator = $mediator;
        $this->name = $name;
    }

    public abstract function send(string $msg): void;
    public abstract function receive(string $msg): void;
}
