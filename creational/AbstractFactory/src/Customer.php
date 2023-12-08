<?php

namespace src;

class Customer {

    private String $firstName;
    private String $lastName;

    public function getFirstName(): String {
        return $this->firstName;
    }

    public function getLastName(): String {
        return $this->lastName;
    }

    public function setFirstName(String $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(String $lastName): void {
        $this->lastName = $lastName;
    }
}
