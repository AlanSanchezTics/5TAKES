<?php
    include "./conexion.php";

    $database = $firebase -> getDatabase();

    $newPost = $database
    -> getReference('tbl_usuarios')
    -> push([
        'usuID'=> 1,
        'usuNombre' =>'Alan David Sanchez Ramos'
    ]);

    echo "echo";

    //holo
?>