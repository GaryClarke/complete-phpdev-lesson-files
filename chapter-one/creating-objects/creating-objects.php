<?php

class User {

    public $name;
    public $username;
    public $followerCount;
}

$garyObject = new User();

$garyObject->name = 'Gary Clarke';
$garyObject->username = '@garyclarketech';
$garyObject->followerCount = 19;

// var_dump($garyObject);

// 1. Instantiate a new User object named after yourself
$johnObject = new User();
// 2. Set name, username, and followerCount properties
$johnObject->name = 'John Smith';
$johnObject->username = '@johnsmith';
$johnObject->followerCount = 5000;
// 3. Use var_dump() to check that you have created it correctly
var_dump($johnObject);
// 4. Check your work in the browser





