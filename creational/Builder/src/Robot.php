<?php

namespace src;

class Robot {
    
    private $robotHead;
    private $robotTorso;
    private $robotArms;
    private $robotLegs;
    
    public function getRobotHead() {
        return $this->robotHead;
    }

    public function getRobotTorso() {
        return $this->robotTorso;
    }

    public function getRobotArms() {
        return $this->robotArms;
    }

    public function getRobotLegs() {
        return $this->robotLegs;
    }

    public function setRobotHead($robotHead): void {
        $this->robotHead = $robotHead;
    }

    public function setRobotTorso($robotTorso): void {
        $this->robotTorso = $robotTorso;
    }

    public function setRobotArms($robotArms): void {
        $this->robotArms = $robotArms;
    }

    public function setRobotLegs($robotLegs): void {
        $this->robotLegs = $robotLegs;
    }


}
