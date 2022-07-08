<?php

//require 'Products.php';

spl_autoload_register(function ($class) {
    //var_dump($class);
    require "$class.php";
});

$product = new Products();

var_dump($product);