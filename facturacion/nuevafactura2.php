<?php
include '../conexion.php';
session_start();
$_POST['tid']=$_SESSION['tid'];
Nuevafactura($_POST['rfc'], $_POST['monto'], $_POST['rsocial'],$_POST['tpago'],$_POST['direccion'],$_POST['ciudad'],$_POST['fecha'],$_POST['tid']);

function Nuevafactura($rfc,$monto,$rsocial,$tpago,$direccion,$ciudad,$fecha,$tid)
{
	 include '../conexion.php';
	 $cd=$rfc.$monto.$rsocial.$tpago.$direccion.$ciudad.$fecha.$tid;
	 
	 $cd=$cd.strrev($cd).$cd;	 
	 for ($i = 0; $i <=strlen($cd)-1 ; $i++) {
    if ($cd{$i}=='a'||$cd{$i}=='3') {
    	$cd{$i}='X';
    }
    if ($cd{$i}=='b'||$cd{$i}=='4') {
    	$cd{$i}='?';
    }
    if ($cd{$i}=='c'||$cd{$i}=='5') {
    	$cd{$i}='%';
    }
    if ($cd{$i}=='d'||$cd{$i}=='6') {
    	$cd{$i}='-';
    }
    if ($cd{$i}=='-'||$cd{$i}=='9') {
    	$cd{$i}='"';
    }
	}	 
	$iva=($monto)-($monto*0.84);	
	$sentencia="INSERT INTO tbl_facturacion(rfc,monto,razonsocial,tid,tipopago,direccion,ciudad,fecha,sellodigital,iva,facturaexiste) VALUES ('".$rfc."',".$monto.",'".$rsocial."',".$tid.",'".$tpago."','".$direccion."','".$ciudad."','".$fecha."','".$cd."',".$iva.",1)";

	                 if ($conexion->query($sentencia) === TRUE) {
                    	echo "<script language='javascript'>"; 
                            echo "alert('Factura Realizada Corectamente');";
                            echo "window.location.href='buscarfolio.php';";
                            echo "</script>"; 


                    }else{

                    		echo "<script language='javascript'>"; 
                            echo "alert('Factura No Realizada');";
                            echo "window.location.href='buscarfolio.php';";
                            echo "</script>"; 
                    }
}
    

    


?>