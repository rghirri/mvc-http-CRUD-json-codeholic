<?php
// coding standards
namespace App\ProjectOne;

//use DateTime, DateInterval, DateTimeZone as TimeZone;

use DateTime;
use DateInterval;
use DateTimeZone as TimeZone;

class DateCalc
{
    public function getTomorrowInLondon()
    {
        //$dt = new \DateTime(); // use global namespace
        $dt = new DateTime(); // use global namespace
        $dt->setTimezone(new TimeZone('Europe/London'));
        $dt->add(new DateInterval('P1D'));
        return $dt->format('l');
    }
}