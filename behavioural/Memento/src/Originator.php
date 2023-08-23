<?php

namespace src;

class Originator
{
    private string $state;

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function saveStateToMemento(): Memento
    {
        return new Memento($this->state);
    }

    public function getStateFromMemento(Memento $memento): void
    {
        $this->state = $memento->getState();
    }
}
