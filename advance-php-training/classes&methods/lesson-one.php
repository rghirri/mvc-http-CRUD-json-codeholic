<?php

class Person
{
    public $name = 'Jane';
    private $phone = 123456;
    // public function __construct()
    // {
    //     echo '__construct is called' . PHP_EOL;
    // }

    // public function __distruct()
    // {
    //     echo '__destruct is called' . PHP_EOL;
    // }

    public function __toString()
    {
        return "Name: $this->name . Phone: $this->phone";
    }
}

$p = new Person();
echo $p;