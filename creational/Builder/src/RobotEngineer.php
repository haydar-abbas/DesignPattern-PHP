<?php

namespace src;

class RobotEngineer {

    private RobotBuilder $builder;

    public function __construct(Robot $robot) {
        $this->builder = new RobotBuilder($robot);
    }

    public function getRobot(): Robot {
        return $this->builder->getRobot();
    }

    public function makeRobot(): void {
        $this->builder->buildRobotHead();
        $this->builder->buildRobotTorso();
        $this->builder->buildRobotArms();
        $this->builder->buildRobotLegs();
    }

}
