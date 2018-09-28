<?php
include "./conexion.php";
$array = array();
session_start();



    $idexam = $_GET['ref'];
    $sql = "UPDATE tbl_examenes SET examCalif=10, examEstatus=1 WHERE examID = '{$indexam}'";
    $result = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script language='javascript'>";
        echo "window.location.href='solicitudes.php'";
        echo "</script>";
    }else{
        echo "<script language='javascript'>";
        echo "window.location.href='solicitudes.php'";
        echo "</script>";
    }

?>