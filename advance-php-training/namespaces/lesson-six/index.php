<?php
require 'App\ProjectOne\DateTime.php';

use App\ProjectOne\DateTime as MyDateTime;

$obj1 = new MyDateTime();
$obj2 = new DateTime(); // php DateTime

print_r($obj1);
echo '<br>';
print_r($obj2);