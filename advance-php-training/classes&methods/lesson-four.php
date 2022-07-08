<?php
// access private method and propety phone and getMobilePhone

class Person
{
    public $name = 'Jane';
    //private $name = 'Jane';
    private $phone = 123456;

    // public function __call($name, $arguments)
    // {
    // }
    private function getMobilePhone()
    {
        return $this->phone;
    }

    public function getPhone()
    {
        return $this->getMobilePhone();
    }
}

$p = new Person();
echo $p->getPhone();