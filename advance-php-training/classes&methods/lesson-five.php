<?php
// access private method and propety phone and getMobilePhone

class Person
{
    public $name = 'Jane';
    //private $name = 'Jane';
    private $phone = 123456;

    public function __call($methodName, $methodArguments)
    {
        //var_dump($methodName, $methodArguments);
        if ($methodName === 'getMobilePhone') {
            return $this->getPhone();
        } elseif ($methodName === 'setMobilePhone') {
            $this->setPhone($methodArguments[0]);
        }
    }

    private function setPhone($methodPhone)
    {
        $this->phone = $methodPhone;
    }

    private function getPhone()
    {
        return $this->phone;
    }
}

$p = new Person();
//echo $p->getPhone();
echo $p->getMobilePhone();
echo '<br>';
$p->setMobilePhone('111111111');
echo '<br>';
echo $p->getMobilePhone();