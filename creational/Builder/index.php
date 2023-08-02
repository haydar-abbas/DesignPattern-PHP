<?php

use src\Robot;
use src\RobotEngineer;

require 'vendor/autoload.php';

$robotEngineer = new RobotEngineer(new Robot());
$robotEngineer->makeRobot();

$newRobot = $robotEngineer->getRobot();

echo "Robot Built...\n";
printf("Robot Head type: %s", $newRobot->getRobotHead());
printf("Robot Torso type: %s", $newRobot->getRobotTorso());
printf("Robot Arms type: %s", $newRobot->getRobotArms());
printf("Robot Legs type: %s", $newRobot->getRobotLegs());
