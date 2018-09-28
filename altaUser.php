<?php
include "conexion.php";
$usuID = $_GET["usuID"];
$sql = "UPDATE tbl_usuarios SET UsuEstatus = 1 WHERE usuId = {$usuID}";
if(mysqli_query($conexion,$sql) === TRUE){
    echo "<script language='javascript'>";
echo "alert('Usuario activado con exito!!');";
echo "window.location.href='solicitudes.php';";
echo "</script>";
}

?>