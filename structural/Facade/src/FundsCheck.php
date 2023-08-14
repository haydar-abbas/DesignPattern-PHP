<?php

namespace src;

class FundsCheck {

    private float $cashInAccount = 1000.00;

    public function getCashInAccount(): float {
        return $this->cashInAccount;
    }

    public function decreaseCashInAccount(float $cashWithdrawn): void {
        $this->cashInAccount -= $cashWithdrawn;
    }

    public function increaseCashInAccount(float $cashDeposited): void {
        $this->cashInAccount += $cashDeposited;
    }

    public function haveEnoughMoney(float $cashWithdrawal): bool {
        if ($cashWithdrawal > $this->getCashInAccount()) {
            echo "Error: You don't have enough money!\n";
            printf("Current balance: %.2f\n", $this->getCashInAccount());
            return false;
        }
        return true;
    }

    public function makeWithDraw(float $cashWithdrawal) {
        $this->decreaseCashInAccount($cashWithdrawal);
        printf("Withdrawal complete, current balance is: %.2f\n", $this->getCashInAccount());
    }

    public function makeDeposit(float $cashToDeposit) {
        $this->increaseCashInAccount($cashToDeposit);
        printf("Deposit complete, current balance is: %.2f\n", $this->getCashInAccount());
    }
}
