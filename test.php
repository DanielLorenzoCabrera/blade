<?php

    require "vendor/autoload.php";

    Use eftec\bladeone\BladeOne; 

    $views = __DIR__ . '/views';
    $cache = __DIR__ . '/cache';// __DIR__ hace referencia al fichero actual

    $blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
    echo $blade->run( "hello" , Array("variable1" => "value1") );


?>

