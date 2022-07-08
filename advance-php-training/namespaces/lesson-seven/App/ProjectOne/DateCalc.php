<?php

namespace App\ProjectOne;
use DateTime;

class DateCalc
{
    public function getToday()
    {
        //$dt = new \DateTime(); // use global namespace
        $dt = new DateTime(); // use global namespace
        return $dt->format('l');
    }
}