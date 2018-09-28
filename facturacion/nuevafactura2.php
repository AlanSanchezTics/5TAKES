<?php
include '../conexion.php';
session_start();
$_POST['tid']=$_SESSION['tid'];
Nuevafactura($_POST['rfc'], $_POST['monto'], $_POST['rsocial'],$_POST['tpago'],$_POST['direccion'],$_POST['ciudad'],$_POST['fecha'],$_POST['iva'],$_POST['tid']);

function Nuevafactura($rfc,$monto,$rsocial,$tpago,$direccion,$ciudad,$fecha,$iva,$tid)
{
	 include '../conexion.php';
	 $cd=$rfc.$monto.$rsocial.$tpago.$direccion.$ciudad.$fecha.$iva.$tid;
	 
	 $cd=$cd.strrev($cd).$cd;

	 var_dump($cd);
	 for ($i = 1; $i <=strlen($cd) ; $i++) {
    echo(charAt($cd, $i));
	}



	 $sellodigital='22fggfgfg';
	 $sentencia="INSERT INTO tbl_facturas(rfc,monto,razonsocial,tid,tipopago,direccion,ciudad,fecha,sellodigital,iva,facturaexiste) VALUES ('".$rfc."',".$monto.",'".$rsocial."',".$tid.",'".$tpago."','".$direccion."','".$ciudad."','".$fecha."','".$sellodigital."',".$iva.",1)";
                    if ($conexion->query($sentencia) === TRUE) {
                    	echo "<script language='javascript'>"; 
                            echo "alert('Factura Realizada Corectamente');";
                            echo "</script>"; 


                    }else{

                    		echo "<script language='javascript'>"; 
                            echo "alert('Factura No Realizada');";
                            echo "</script>"; 
                    }
}
    

    


?>