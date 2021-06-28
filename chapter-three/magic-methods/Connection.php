<?php

class Connection
{
    private static int $count = 0;

    /**
     * @var string Connection Identifer
     */
    private string $connectionId;

    private int $conferenceId = 1234;

    public function __construct()
    {
        self::$count++;
    }


    /**
     * __destruct
     * 
     * 
     * The destructor method will be called as soon as there are no other references 
     * to a particular object,
     * or in any order during the shutdown sequence.
     */
    public function __destruct()
    {
        self::$count--;
    }    


    /**
     * Used for reading data from inaccessible (protected or private) properties.
     */
    public function __get($name)
    {
        return $this->$name;
    }


    /**
     * The string representation of an object
     * 
     * The __toString() method allows a class to decide how it will react when it is treated like a string.
     * For example, what echo / print $obj; will print.
     * 
     * @return string
     */
    public function __toString()
    {
        // Can be anything which represents your obj as a string in a meaningful way
        return "Conference ID: {$this->conferenceId} <br> Connection ID: {$this->connectionId}";
    }


    // 1. Using this class, 
    // create a solution for accessing the $count property in magic-methods.php
    public function getCount()
    {
        return self::$count;
    }


    public function setConnectionId($ipAddress)
    {
        if(filter_var($ipAddress, FILTER_VALIDATE_IP)) {

            $this->connectionId = $ipAddress . '_' . self::$count;

            return;
        }

        die('Not a valid ip address');
    }        
}