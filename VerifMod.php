<?php
include"./conexion.php";
$array = array();
session_start();

    $idusu = $_GET['ref'];
    $sql = "UPDATE tbl_usuarios SET examCalif=10, examEstatus=1 WHERE UsuID = '{$idusu}'";

?>