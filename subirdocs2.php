<?php
include 'conexion.php';
session_start();
$id_usuario=$_SESSION["usuID"];

NuevoDoc($_FILES['doc'],$id_usuario);

function NuevoDoc($docn,$usuid)
{
include 'conexion.php';
if ($_FILES['doc']['type']=="image/jpeg" or $_FILES['doc']['type']=="image/png" or $_FILES['doc']['type']=="image/jpg" or $_FILES['doc']['type']==null) {
	if ($_FILES['imagen']['type']!=null) {
                        $foto=$_FILES['imagen']['name'];
                        $tipoarchivo=$_FILES['imagen']['type'];
                        $rest = substr($tipoarchivo,6);                            
                        $ruta="Documentos/".$usuid.".".$rest;
                        $rutadoc=$ruta;                            
                        move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
                                   }else
                                   {
                                    $rutadoc=null;
                                   }

      $sentencia="INSERT INTO tbl_documentos(usuid,doctipo,doclink,docvigencia,docrevisado,docstatus) VALUES (".$usuid.",'Carta De Antecedentes No penales','".$rutadoc."','".$date("d-m-Y")."',0,0)";
      var_dump($sentencia);
      die();

       if ($conexion->query($sentencia) === TRUE ) {
       	echo "<script language='javascript'>"; 
        echo "alert('Archivo Subido Correctamente');";
        echo "window.location.href='subirdocs.php';";
        echo "</script>";
       }


	}else{
		echo "<script language='javascript'>"; 
        echo "alert('Este Tipo de Archivo No Se Admite,Favor De Subir Archivo Extension Jpeg,Jpg o Png');";
        echo "window.location.href='subirdocs.php';";
        echo "</script>"; 

	}


	


}



?>