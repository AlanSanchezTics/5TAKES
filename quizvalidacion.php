<?php
include "./conexion.php";
$array = array();
session_start();



    $idexam = $_GET['ref'];
    $sql = "UPDATE tbl_examenes SET examCalif=10, examEstatus=1 WHERE examID = '{$indexam}'";

    if (mysqli_query($conexion, $sql) === TRUE) {
        echo "<script language='javascript'>";
        echo "window.location.href='solicitudes.php'";
        echo "</script>";
    }else{
        echo "<script language='javascript'>";
        echo "alert('Error al actualizar')";
        echo "window.location.href='solicitudes.php";
        echo "</script>";
    }

?>