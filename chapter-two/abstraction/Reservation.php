<?php

class Reservation 
{
    private $host = 'Host class'; // Host class
    private $guest = 'Guest class'; // Guest class

    // cancel
    public function cancel()
    {
        $this->sendCancellationNotification();

        $this->refundGuest();

        echo "And a load of other stuff that you don't need to know about...<br>";
    }


    private function sendCancellationNotification()
    {
        echo 'Sending notification to ' . $this->host . '<br>';
    }


    private function refundGuest()
    {
        echo 'Refunding ' . $this->guest . '<br>';
    }
}