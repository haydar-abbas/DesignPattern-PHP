<?php

require_once 'vendor/autoload.php';

use \src\Remote;
use \src\TV;
use \src\Satellite;
use \src\TurnON;
use \src\TurnOFF;

$remote = new Remote();
$tv = new TV();
$satellite = new Satellite();

$remote->addCommand($tv::SLOT, new TurnON($tv), new TurnOFF($tv));
$remote->addCommand($satellite::SLOT, new TurnON($satellite), new TurnOFF($satellite));

$remote->onBtnPress($tv::SLOT);
$remote->offBtnPress($tv::SLOT);

$remote->onBtnPress($satellite::SLOT);
$remote->offBtnPress($satellite::SLOT);
