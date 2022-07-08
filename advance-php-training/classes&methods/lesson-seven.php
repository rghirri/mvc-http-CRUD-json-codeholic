<?php
// access private method and propety phone and getMobilePhone

/**
 * More arguments
 * this is the same as call but for static methods
 * */

class Person
{
    public $name = 'Jane';
    //private $name = 'Jane';
    private $phone = 123456;

    public static function __callStatic($name, $arguments)
    {
        echo "\"$name\" static method was called";
    }
}

$p = new Person();
Person::hello();