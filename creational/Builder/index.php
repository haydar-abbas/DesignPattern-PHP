<?php

require 'vendor/autoload.php';

use src\Robot;
use src\RobotBuilder;

$robotBuilder = new RobotBuilder(new Robot());
$newRobot = $robotBuilder->getRobot();

echo "Robot Built...\n";
printf("Robot Head type: %s", $newRobot->getRobotHead());
printf("Robot Torso type: %s", $newRobot->getRobotTorso());
printf("Robot Arms type: %s", $newRobot->getRobotArms());
printf("Robot Legs type: %s", $newRobot->getRobotLegs());
