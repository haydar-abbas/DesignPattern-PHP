<?php

namespace src;

class AccountNumberCheck {

    public function getAccountNumber(): int {
        return 12345678;
    }

    public function accountActive(int $acctNumToCheck): bool {
        return $acctNumToCheck == $this->getAccountNumber();
    }
}
