<?php

require_once 'CheckingAccount.php';

class PremiumCheckingAccount extends CheckingAccount
{
    public $minimumBalance = 5000;
}