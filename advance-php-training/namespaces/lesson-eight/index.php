<?php
require 'App\ProjectOne\DateCalc.php';

use App\ProjectOne\DateCalc;

$calc = new DateCalc();

echo $calc->getTomorrowInLondon();