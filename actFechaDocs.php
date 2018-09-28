<?php
include "conexion.php";
if (isset($_POST["validar"])) {
    $sql = "UPDATE tbl_documentos SET docVigencia='{$_POST["fecha"]}' WHERE docId={$_POST["docID"]}";
    if(mysqli_query($conexion,$sql) === TRUE){
        echo "<script language='javascript'>";
    echo "window.location.href='solicitudes.php'";
    echo "</script>";
    }
} else {
    echo "<script language='javascript'>";
    echo "window.location.href='solicitudes.php'";
    echo "</script>";
}

?>