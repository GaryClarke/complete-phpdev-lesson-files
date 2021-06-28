<?php

namespace App\Logging;

trait LoggableTrait
{
    protected $logger;

    public function setLogger(Logger $logger)
    {
        echo 'Called from loggable trait <br>';

        $this->logger = $logger;
    }

    public function getLogger(): Logger
    {
        return $this->logger;
    }
}