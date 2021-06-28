<?php

class Account
{
    public $accountNumber;
    public $balance;

    public function deposit($amount)
    {
        echo 'Depositing ' . $amount . '<br>';
    }

    public function withdraw($amount)
    {
        echo 'Withdrawing ' . $amount . '<br>';
    }

    public function getBalance()
    {
        return $this->balance;
    }
}