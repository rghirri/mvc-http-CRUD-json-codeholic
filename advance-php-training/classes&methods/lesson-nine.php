<?php
// static methods

// use object as a function
/**
 * More arguments
 * this is the same as call but for static methods
 * */

class Person
{
    public $name = 'Jane';
    //private $name = 'Jane';
    private $phone = 123456;

    // public function __invoke($objectName)
    // {
    //     // echo 'Hello from invoke';
    //     return "Object was called as a function hello $objectName";
    // }
}

$p = new Person();
var_dump(is_callable($p));
//echo $p('Rayaa');