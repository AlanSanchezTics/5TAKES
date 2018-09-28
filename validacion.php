<?php
include "./conexion.php";
$array = array();
session_start();
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
if (isset($_POST["user"]) && isset($_POST["password"])) {
    $user = $_POST["user"];
    $clave = $_POST["password"];

    $sql = "SELECT * FROM tbl_usuarios WHERE UsuEmail='{$user}' AND UsuContraseña=AES_ENCRYPT('{$clave}','FIVETAKES')";
    $result = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($reg = mysqli_fetch_array($result)) {
            switch ($reg["UsuEstatus"]) {
                case 0:
                    echo "<script language='javascript'>";
                    echo "window.location.href='index.php?INACTIVE=true'";
                    echo "</script>";
                    break;
                case 1:
                $_SESSION["usuID"]=$reg[0];
                $_SESSION["usuNombre"] = "{$reg[1]} {$reg[2]}";
                    echo "<script language='javascript'>";
                    echo "window.location.href='solicitudes.php'";
                    echo "</script>";
                    break;
                    case 2:
                    $_SESSION["usuID"]=$reg[0];
                    $_SESSION["usuNombre"] = "{$reg[1]} {$reg[2]}";
                        echo "<script language='javascript'>";
                        echo "window.location.href='servicioproveedor.php'";
                        echo "</script>";
                    break;
            }
        }
    } else {
        echo "<script language='javascript'>";
        echo "window.location.href='index.php?wrongAccess=true'";
        echo "</script>";
    }
}
?>