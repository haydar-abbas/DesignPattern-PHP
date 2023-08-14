<?php

namespace src;

class SecurityCodeCheck {

    public function getSecurityCode(): int {
        return 1234;
    }

    public function isCodeCorrect(int $secCodeToCheck): bool {
        return $secCodeToCheck == $this->getSecurityCode();
    }
}
