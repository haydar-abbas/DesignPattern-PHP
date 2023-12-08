<?php

namespace src;

class Order {

    private array $partNumber = [];
    private string $location;
    private string $cost;

    public function getPartNumber(): array {
        return $this->partNumber;
    }

    public function getLocation(): string {
        return $this->location;
    }

    public function getCost(): string {
        return $this->cost;
    }

    public function setPartNumber(array $partNumber): void {
        $this->partNumber = $partNumber;
    }

    public function setLocation(string $location): void {
        $this->location = $location;
    }

    public function setCost(string $cost): void {
        $this->cost = $cost;
    }
}
