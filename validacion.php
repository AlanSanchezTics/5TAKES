<?php
include "./conexion.php";
$array = array();
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
                    echo "<script language='javascript'>";
                    echo "window.location.href='dashboard.php'";
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