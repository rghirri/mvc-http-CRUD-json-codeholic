<?php
// How many instances of calss Person is created

use Person as GlobalPerson;

class Person
{
    public $name;
    //private $name = 'Jane';
    public $phone;

    static $counter = 0;

    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        self::$counter++;
    }
    public function __clone()
    {
        //var_dump($this);
        self::$counter++;
    }

    public function __wakeup()
    {
        self::$counter++;
    }
}

$p = new Person('Jane', '123456');
//var_dump($p);
//echo '<br>';
$newPersonOne = clone $p;
$newPersonTwo = clone $p;
$newPersonThree = unserialize(serialize($p));
var_dump($p, $newPersonOne, $newPersonTwo, $newPersonThree);
echo '<br>';
echo Person::$counter;