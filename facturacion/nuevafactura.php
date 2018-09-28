<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nueva Factura</title>
  <meta charset="utf-8">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table>
  <tr>
    <th><img src="../logo.png" alt="Smiley face" width="64" height="64" class="logoprincipal"></th>
    <th><div class = "lbl">
  <a href="#"><?php session_start(); echo $_SESSION["usuNombre"];?></a>
  <br>
  <a href ="" >Cerrar Sesion</a>
</div></th>
  </tr>
</table>

<!--Hola-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="../solicitudes.php">Solicitudes</a></li>
      <li><a href="#">Finanzas</a></li>
      <li><a href="../proveedores.php">Proveedores</a></li>
      <li><a href="../Colaboradores.php">Colaboradores</a></li>
      <li><a href="../encuestas.php">Clientes</a></li>
      <li><a href="../facturacion/vercobros.php">Facturaci&oacute;n</a></li>
    </ul>
  </div>
</nav>
<div class="container">
 <form action="nuevafactura2.php" method="post">
<label>RFC</label>
<input type="text" name="rfc"></input>
<br>
<label>Monto</label>
<input type="text" name="monto"></input>
<br>
<label>razon social</label>
<input type="text" name="rsocial"></input>
<br>
<label>tipo de pago</label>
<input type="text" name="tpago"></input>
<br>
<label>Direccion</label>
<input type="text" name="direccion"></input>
<br>
<label>Ciudad</label>
<input type="text" name="ciudad"></input>
<br>
<label>Fecha</label>
<input type="date" name="fecha"></input>
<br>
<br>
<input type="SUBMIT" value="Enviar"></input>
</form>     
</div>
</body>
</html>
