<?php
// static methods

// use object as a function
/**
 * More arguments
 * this is the same as call but for static methods
 * */

class Person
{
    public $name;
    //private $name = 'Jane';
    public $phone;

    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }
    // called before serialize is called
    public function __sleep()
    {
        unset($this->phone);
        return ['name'];
    }
    // called before unserialize is called
    public function __wakeup()
    {
        echo 'I am waking up';
    }
}

$p = new Person('Jane', '123456');
$serialized = serialize($p);
// echo $serialized;
// echo '<br>';
$newPerson = unserialize($serialized);
//var_dump($newPerson);
// print_r($newPerson);
// echo '<br>';
//var_dump($newPerson === $p);
//echo '<br>';
var_dump($newPerson);