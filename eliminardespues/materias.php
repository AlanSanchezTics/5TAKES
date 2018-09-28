<?php
session_start();
$id_docenteSS=$_SESSION['sadmin'];

include '../../conexion.php';

$el_grupo = $_POST['continente'];
$query = $conexion->query("SELECT * FROM tbl_asignacionmaterias WHERE id_grupo = $el_grupo and existe=1");

echo '<option value="0">Seleccione</option>';

        
    $sentenciaa="SELECT *from tbl_grupos where id_grupo={$el_grupo} and id_docente_e={$id_docenteSS} and existe=1;";
    $result = mysqli_num_rows(mysqli_query($conexion,$sentenciaa));  
    $flag=0;
    if($result>0){
        $flag=$flag+1;
        $mattipo=1;
    }
    $sentenciab="SELECT *from tbl_grupos where id_grupo={$el_grupo} and id_docente_i={$id_docenteSS} and existe=1";
    $result = mysqli_num_rows(mysqli_query($conexion,$sentenciab));  
    if($result>0){
        $flag=$flag+1;
        $mattipo=2;
    }   


while ( $row = $query->fetch_array() )
{  
    if ($flag==2){
        $sentenciam="SELECT *from tbl_materias where id_materia={$row[2]} and existe=1";
    }

    if ($flag==1){
    $sentenciam="SELECT *from tbl_materias where id_materia={$row[2]} and mat_tipo={$mattipo} and existe=1";
    }  
     $resultado = $conexion -> query($sentenciam);
     $filas = $resultado -> fetch_array();
     if ($filas[2]==""){

     }else
     {
        echo '<option value="' . $filas[0]. '">' . $filas[2] . '</option>' . "\n";        
     }
	
}
