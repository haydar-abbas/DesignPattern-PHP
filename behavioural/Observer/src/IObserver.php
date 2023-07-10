<?php

namespace src;

interface IObserver {

    function update(string $msg);
}
