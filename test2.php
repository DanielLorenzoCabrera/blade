<?php
    require "vendor/autoload.php";

    use eftec\bladeone\BladeOne;

    $blade = new BladeOne();

    $posts = [
        ["id"=>1, "titulo" => "Procesador", "post" => "Datos del post", "fecha" => "1/1/90", "tags" => "memoria, procesador", "usuario" => "Jose"],
        ["id"=>2, "titulo" => "Procesador", "post" => "Datos del post", "fecha" => "1/1/90", "tags" => "memoria, procesador", "usuario" => "Ruben"],
        ["id"=>3, "titulo" => "Procesador", "post" => "Datos del post", "fecha" => "1/1/90", "tags" => "memoria, procesador", "usuario" => "Irene"],
        ["id"=>4, "titulo" => "Procesador", "post" => "Datos del post", "fecha" => "1/1/90", "tags" => "memoria, procesador", "usuario" => "Jonay"]
    ];

    $comentarios = [
        ["id"=>1, "comentario" => "Me gusto mucho", "usuario" => "Jesus"],
        ["id"=>2, "comentario" => "Me gusto mucho", "usuario" => "Ana"],
        ["id"=>3, "comentario" => "Me gusto mucho", "usuario" => "Maria"],
        ["id"=>4, "comentario" => "Me gusto mucho", "usuario" => "Ismael"],
    ];

    $comentarios = ["Hardware", "Software", "Java", "PHP"];

    echo $blade->run("hello", [
        "nombre" => "Jose e Irene",
        "posts" => $posts,
        "comentarios" => $comentarios,
    ]
    );










    ?>
