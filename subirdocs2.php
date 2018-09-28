<?php
include 'conexion.php';
session_start();
$_POST['id_usuario']=$_SESSION["usuID"];
NuevoDoc($_FILES['doc'],$_POST['id_usuario']);

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
                                    $nombreimagen=null;
                                   }

      $sentencia="INSERT INTO tbl_alumnos(id_alumno,nombre,a_paterno,a_materno,grado,tel,email,nivel,fecha_ingreso,fecha_egreso,id_usuario,imagen,existe) VALUES ('".$no_control."','".$nombre."','".$a_paterno."','".$a_materno."','".$grado."','".$telefono."','".$email."','".$nivel."','{$fecha_ingreso}','{$fecha_egreso}',".$filas[0].",'".$nombreimagen."',1)";
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