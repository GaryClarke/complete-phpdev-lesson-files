<?php


interface RandomInterface
{

}

class A implements RandomInterface {}

class B extends A
{

}

$a = new A();
$b = new B();

if ($b instanceof RandomInterface) {
    echo 'True' . PHP_EOL;
} else {
    echo 'False' . PHP_EOL;
}