<?php
session_start();
$_SESSION['tid']=$_POST['folio'];
NuevoFolio($_POST['folio']);
function NuevoFolio($folio)
{
	include "../conexion.php";
$sentencia="SELECT *FROM tbl_trabajosrealizados WHERE trabid=".$folio." and trabexiste=1";	
        $user = mysqli_num_rows(mysqli_query($conexion,$sentencia));
        if ($user>0)
        {
            	$sentencia="SELECT *FROM tbl_facturacion WHERE tid=".$folio." and facturaexiste=1";	
        		$user = mysqli_num_rows(mysqli_query($conexion,$sentencia));
        		if ($user>0)
        		{
            		echo "<script language='javascript'>"; 
            		echo "alert('El cobro Ya Habia Sido Facturado');";
            		echo "window.location.href='vercobros.php';";
            		echo "</script>";
        		}else
        		{
        			echo "<script language='javascript'>";             
            		echo "window.location.href='nuevafactura.php';";
            		echo "</script>";
        		}

        }else
        {
        	echo "<script language='javascript'>";     
        	echo "alert('No Se Encuentra El Folio Del Trabajo A Buscar ');";        
            echo "window.location.href='vercobros.php';";
            echo "</script>";
        }



	

}
?>