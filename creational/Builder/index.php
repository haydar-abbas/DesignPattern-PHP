<?php

require 'vendor/autoload.php';

$robotEngineer = new \src\RobotEngineer(new src\Robot());
$robotEngineer->makeRobot();

$newRobot = $robotEngineer->getRobot();

echo "Robot Built...\n";
echo "Robot Head type: " . $newRobot->getRobotHead();
echo "Robot Torso type: " . $newRobot->getRobotTorso();
echo "Robot Arms type: " . $newRobot->getRobotArms();
echo "Robot Legs type: " . $newRobot->getRobotLegs();
    