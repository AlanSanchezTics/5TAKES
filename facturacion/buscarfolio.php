<?php

NuevoFolio( $_POST['folio']);

function NuevoFolio($folio)
{
	include "../conexion.php";
	$sentencia="SELECT *FROM tbl_facturacion WHERE tid=".$folio." and facturaexiste=1";	
        $user = mysqli_num_rows(mysqli_query($conexion,$sentencia));

        if ($user>0)
        {
            echo "<script language='javascript'>"; 
            echo "alert('el cobro Ya Esta Facturado');";
            echo "window.location.href='vercobros.php';";
            echo "</script>";
        }else
        {
        	echo "<script language='javascript'>";             
            echo "window.location.href='nuevafactura.php';";
            echo "</script>";
        }

}
?>