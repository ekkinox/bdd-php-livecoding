<?php

namespace spec\Ekkinox\BddPhpLivecoding;

use Ekkinox\BddPhpLivecoding\BankAccount;
use PhpSpec\ObjectBehavior;

/**
 * @package spec\Ekkinox\BddPhpLivecoding
 */
class BankAccountSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BankAccount::class);
    }

    function it_can_get_and_set_the_balance()
    {
        $this->getBalance()->shouldReturn(null);
        $this->setBalance(100)->shouldReturn($this);
        $this->getBalance()->shouldReturn(100);
    }

    function it_can_handle_a_deposit()
    {
        $this->setBalance(100)->shouldReturn($this);
        $this->makeDeposit(20)->shouldReturn($this);
        $this->getBalance()->shouldReturn(120);
    }

    function it_can_handle_a_withdraw()
    {
        $this->setBalance(100)->shouldReturn($this);
        $this->makeWithdraw(20)->shouldReturn($this);
        $this->getBalance()->shouldReturn(80);
    }
}
