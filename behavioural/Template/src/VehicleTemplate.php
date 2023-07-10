<?php

namespace src;

abstract class VehicleTemplate {

    public function buildVehicle() {
        $this->collectComponents();
        $this->assembleComponents();
        $this->installGearBox();
        $this->startVehicle();
        echo "Vehicle is ON!\n";
    }

    private function collectComponents() {
        echo "Collect all component...\n";
    }

    protected abstract function assembleComponents();

    protected abstract function installGearBox();

    private function startVehicle() {
        echo "Engin is powering up...\n";
    }

}
