<?php
/**
 * a bit like a storage room use
 * only what you need.
 */

require 'App\Models\Admin\Item.php';
require 'App\Utils\functions.php';

use App\Models\Admin\Item;
use const App\Utils\MAX;
use function App\Utils\sayHello;

$obj = new Item();
//var_dump($obj);
print_r($obj);
echo '<br>';
echo MAX;
echo '<br>';
sayHello();
echo '<br>';