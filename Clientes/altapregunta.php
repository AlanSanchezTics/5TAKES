<?php
include "../conexion.php";

$sql = "INSERT INTO tbl_preguntas(prePregunta, preCat, preExiste) VALUES('{$_POST['pregunta']}','Satisfaccion',1)";
if(mysqli_query($conexion,$sql) === TRUE){
    echo "<script language='javascript'>";
                    echo "window.location.href='gestionpreguntas.php'";
                    echo "</script>";
}
?>