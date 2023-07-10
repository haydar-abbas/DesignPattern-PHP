<?php

namespace src;

class Silent implements IState {

    public function alert() {
        echo "The mobile is on Silent..!\n";
    }

}
