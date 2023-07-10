<?php

namespace src;

class Car extends VehicleTemplate {

    protected function assembleComponents() {
        echo "Assembled Car components...\n";
    }

    protected function installGearBox() {
        echo "Installing a gearbox of the Car...\n";
    }

}
