<?php

//require 'App/Models/User.php';

spl_autoload_register(function ($class) {
    // var_dump($class);
    require str_replace('\\', '/', $class) . '.php';
});

$user = new App\Models\User();

var_dump($user);