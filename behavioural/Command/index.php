<?php

require_once 'vendor/autoload.php';

use src\Fan;
use src\Light;
use src\OffCommand;
use src\OnCommand;
use src\Switchs;

$switch = new Switchs;
$light = new Light;
$fan = new Fan;

$switch->addCommand($light->name, new OnCommand($light), new OffCommand($light));
$switch->addCommand($fan->name, new OnCommand($fan), new OffCommand($fan));

$switch->onBtnPress($light->name);
$switch->offBtnPress($light->name);
$switch->onBtnPress($fan->name);
$switch->offBtnPress($fan->name);
