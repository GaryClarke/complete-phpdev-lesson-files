<?php

require_once './vendor/autoload.php';

final class PercentageCalculator
{
    public function calculatePercentage($part, $whole): float
    {
        return $part / $whole * 100;
    }
}

class FinanceCalculator extends PercentageCalculator
{
    public function calculatePercentage($a, $b): float
    {
        return $a / ($b * 100);
    }
}












