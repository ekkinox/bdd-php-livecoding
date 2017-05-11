<?php

namespace Ekkinox\BddPhpLivecoding;

/**
 * @package Ekkinox\BddPhpLivecoding
 */
class BankAccount
{
    /**
     * @var int
     */
    private $balance;

    /**
     * @return int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     *
     * @return BankAccount
     */
    public function setBalance(int $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * @param int $amount
     *
     * @return BankAccount
     */
    public function makeDeposit(int $amount): self
    {
        $this->balance += $amount;

        return $this;
    }

    /**
     * @param int $amount
     *
     * @return BankAccount
     */
    public function makeWithdraw(int $amount): self
    {
        $this->balance -= $amount;

        return $this;
    }
}
