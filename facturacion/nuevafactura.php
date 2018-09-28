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
 <form action="nuevafactura2.php" method="post" class="form-group">
 <div class="row">
 <div class="col-sm-3"></div>
 <div class="col-sm-6">
<div class="form-group">
<input type="text" placeholder="Ingresa RFC" name="rfc" class="form-control"></input>
</div>
<div class="form-group">
<input type="text" placeholder="Ingresa Monto" name="monto" class="form-control"></input>
</div>
<div class="form-group">
<input type="text" placeholder="Ingresa Razon Social" name="rsocial" class="form-control"></input>
</div>
<div class="form-group">
<input type="text" placeholder="Ingresa Tipo de Pago" name="tpago" class="form-control"></input>
</div>
<div class="form-group">
<input type="text" placeholder="Ingresa Direccion" name="direccion" class="form-control"></input>
</div>
<div class="form-group">
<input type="text" placeholder="Ingresa Ciudad" name="ciudad" class="form-control"></input>
</div>
<div class="form-group">
<label>Ingresa Fecha</label>
<input type="date" name="fecha" class="form-control"></input>
</div>
</div> 
<div class="col-sm-3"></div>
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-2">
<button type="SUBMIT"  class="btn btn-primary" ><h4>Enviar<h4></button>
</div>
<div class="col-sm-5"></div>
</div>
</div>
</form>     
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
