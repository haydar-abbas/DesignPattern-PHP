<?php

namespace src;

class Ringing implements IState {

    public function alert() {
        echo "The mobile is Ringing..!\n";
    }

}
