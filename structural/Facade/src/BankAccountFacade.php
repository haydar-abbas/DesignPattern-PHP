<?php

namespace src;

class BankAccountFacade
{
    private int $accountNumber;
    private int $securityCode;

    private AccountNumberCheck $acct_checker;
    private SecurityCodeCheck $code_checker;
    private FundsCheck $fund_checker;

    public function __construct(int $accountNumber, int $securityCode)
    {
        $this->accountNumber = $accountNumber;
        $this->securityCode = $securityCode;

        new WelcomeToBank();
        $this->acct_checker = new AccountNumberCheck();
        $this->code_checker = new SecurityCodeCheck();
        $this->fund_checker = new FundsCheck();
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function getSecurityCode(): int
    {
        return $this->securityCode;
    }

    public function withDrawCash(float $cashToGet): void
    {
        if (
            $this->acct_checker->accountActive($this->getAccountNumber()) &&
            $this->code_checker->isCodeCorrect($this->getSecurityCode()) &&
            $this->fund_checker->haveEnoughMoney($cashToGet)
        ) {
            $this->fund_checker->makeWithDraw($cashToGet);
            echo "Transaction complete\n\n";
        } else {
            echo "Transaction failed\n\n";
        }
    }

    public function depositCash(float $cashToDeposit): void
    {
        if (
            $this->acct_checker->accountActive($this->getAccountNumber()) &&
            $this->code_checker->isCodeCorrect($this->getSecurityCode())
        ) {
            $this->fund_checker->makeDeposit($cashToDeposit);
            echo "Transaction complete\n\n";
        } else {
            echo "Transaction failed\n\n";
        }
    }
}
