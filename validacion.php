<?php
    include "./conexion.php";

    $database = $firebase -> getDatabase();

    $newPost = $database
    -> getReference('tbl_usuarios')
    -> push([
        'usuID'=> 2,
        'usuNombre' =>'Hector Palomino Vargas'
    ]);

    $reference = $database->getReference('tbl_usuarios');
    $value = $reference ->getValue();

    echo(json_encode($value));
?>