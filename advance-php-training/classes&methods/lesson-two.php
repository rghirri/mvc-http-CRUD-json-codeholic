<?php

class Person
{
    //public $name = 'Jane';
    private $name = 'Jane';
    private $phone = 123456;

    public function __get($propName)
    {
        if ($propName === 'username') {
            return $this->name;
        }
        return "Property \"$propName\" does not exist";
    }
}

$p = new Person();
echo $p->username;