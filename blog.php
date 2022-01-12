<?php



    require "vendor/autoload.php";

    Use eftec\bladeone\BladeOne; 

    $views = __DIR__ . '/views';
    $cache = __DIR__ . '/cache';// __DIR__ hace referencia al fichero actual

    $blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);


    $posts = [
        ["id"=>1, "titulo" => "Procesador", "post" => "Datos del post", "fecha" => "1/1/90", "tags" => "memoria, procesador", "usuario" => "Jose"],
        ["id"=>2, "titulo" => "Procesador", "post" => "Datos del post", "fecha" => "1/1/90", "tags" => "memoria, procesador", "usuario" => "Ruben"],
        ["id"=>3, "titulo" => "Procesador", "post" => "Datos del post", "fecha" => "1/1/90", "tags" => "memoria, procesador", "usuario" => "Irene"],
        ["id"=>4, "titulo" => "Procesador", "post" => "Datos del post", "fecha" => "1/1/90", "tags" => "memoria, procesador", "usuario" => "Jonay"]
    ];


    /* Para llamar a la vista ejecutamos la funcion run. Se le pasa el nombre de la vista a lanzar y un array con los
    datos a meter en la vista
*/
    echo $blade->run("blog",[
        "posts" => $posts,
        "title" => "Titulo de ejemplo"
    ])










?>