<?php
    include "./conexion.php";

    /*$database = $firebase -> getDatabase();

    $newPost = $database
    -> getReference('tbl_usuarios')
    -> push([
        'usuID'=> 2,
        'usuNombre' =>'Hector Palomino Vargas'
    ]);

    $reference = $database->getReference('tbl_usuarios');
    $value = $reference ->getValue();

    echo(json_encode($value));*/
        if(isset($_POST["user"]) && isset($_POST["password"])){
            $user = $_POST["user"];
            $clave = $_POST["password"];

        $sql="SELECT * FROM tbl_usuarios WHERE usuEmail='{$user}' AND usuContraseña=AES_DECRYPT({'$clave}','FIVETAKES')";
        $result 
        }
?>