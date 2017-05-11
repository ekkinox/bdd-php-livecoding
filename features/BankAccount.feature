Feature: BankAccount
  In order to be able to handle my bank account
  As a customer
  I need to be able to deposit and withdraw money.

  Scenario: Initialize bank account with a balance
    When I set my bank account balance to 100
    Then my bank account balance should be 100

    Scenario: I can make a deposit
      Given My bank account has a balance of 100
      When I make a deposit of 20
      Then my bank account balance should be 120

  Scenario: I can make a withdraw
    Given My bank account has a balance of 100
    When I make a withdraw of 20
    Then my bank account balance should be 80