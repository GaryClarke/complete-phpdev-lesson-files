<?php

require_once 'Account.php';

class CheckingAccount extends Account
{
    public function transfer($amount)
    {
        echo 'Transferring ' . $amount . '<br>';
    }

    // Create a PremiumCheckingAccount class which extends CheckingAccount
    // Give it a public $minimumBalance property with a default value
    // Echo out $premiumCheckingAccount->minimumBalance in inheritance.php
    // Call all of the methods which it inherits
}