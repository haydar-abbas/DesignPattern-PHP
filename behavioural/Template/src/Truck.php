<?php

namespace src;

class Truck extends VehicleTemplate {

    protected function assembleComponents() {
        echo "Assembled all Truck components...\n";
    }

    protected function installGearBox() {
        echo "Install a gearbox of Truck...\n";
    }

}
