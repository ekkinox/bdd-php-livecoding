<?php

use Behat\Behat\Context\Context;
use Ekkinox\BddPhpLivecoding\BankAccount;

/**
 * Defines application features from the specific context.
 */
class BankAccountContext implements Context
{
    /**
     * @var BankAccount
     */
    private $bankAccount;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->bankAccount = new BankAccount();
    }

    /**
     * @When I set my bank account balance to :balance
     */
    public function iSetMyBankAccountBalanceTo($balance)
    {
        $this->bankAccount->setBalance($balance);
    }

    /**
     * @Then my bank account balance should be :balance
     */
    public function myBankAccountBalanceShouldBe($balance)
    {
        PHPUnit_Framework_Assert::assertEquals(
            $balance,
            $this->bankAccount->getBalance()
        );
    }

    /**
     * @Given My bank account has a balance of :balance
     */
    public function myBankAccountHasABalanceOf($balance)
    {
        $this->bankAccount->setBalance($balance);
    }

    /**
     * @When I make a deposit of :amount
     */
    public function iMakeADepositOf($amount)
    {
        $this->bankAccount->makeDeposit($amount);
    }

    /**
     * @When I make a withdraw of :amount
     */
    public function iMakeAWithdrawOf($amount)
    {
        $this->bankAccount->makeWithdraw($amount);
    }
}
