<?php
// Access private property
class Person
{
    //public $name = 'Jane';
    private $name = 'Jane';
    private $phone = 123456;

    public function __set($propName, $value)
    {
        //var_dump($propName, $value);
        //throw new Exception(message:"Property does not exist");
        if ($propName === 'username') {
            $this->name = $value;
        }
        return "Property \"$propName\" does not exist";
    }
    public function __get($propName)
    {
        if ($propName === 'username') {
            return $this->name;
        }
        return "Property \"$propName\" does not exist";
    }
}

$p = new Person();
$p->username = 'Marry';
echo $p->username;