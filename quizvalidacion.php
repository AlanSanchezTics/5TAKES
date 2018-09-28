<?php
include "./conexion.php";
$array = array();
session_start();



    $idexam = $_GET['ref'];
    $sql = "INSERT INTO tbl_examenes (usuID,examCalif,examEstatus) VALUES ('{$indexam}',10,1)";

    if (mysqli_query($conexion, $sql) === TRUE) {
        echo "<script language='javascript'>";
        echo "window.location.href='solicitudes.php'";
        echo "</script>";
    }else{
        echo "<script language='javascript'>";
        echo "alert('Error al Guardar')";
        echo "window.location.href='solicitudes.php";
        echo "</script>";
    }

?>