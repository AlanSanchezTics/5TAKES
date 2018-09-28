<?php
include "conexion.php";
$usuID = $_GET["usuID"];
$sql = "UPDATE tbl_usuarios SET UsuEstatus = 0 WHERE usuId = {$usuID}";
if(mysqli_query($conexion,$sql) === TRUE){
    echo "<script language='javascript'>";
echo "alert('Usuario Descativado con exito!!');";
echo "window.location.href='dashboard.php;'";
echo "</script>";
}

?>