<?php

namespace src;

class Student implements IObserver {

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function update(string $msg) {
        echo "$this->name Got new notification: $msg\n";
    }

}
