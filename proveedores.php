<!DOCTYPE html>
<html>
<head>
  <title>Proveedores</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table>
  <tr>
    <th><img src="logo.png" alt="Smiley face" width="64" height="64" class="logoprincipal"></th>
    <th><div class = "lbl">
    <a href="#"><?php session_start(); echo $_SESSION["usuNombre"];?></a>
  <br>
  <a href ="" >Cerrar Sesion</a>
</div></th>
  </tr>
</table>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="solicitudes.php">Solicitudes</a></li>
      <li><a href="finanzas.php">Finanzas</a></li>
      <li><a href="proveedores.php" class="selected">Proveedores</a></li>
      <li><a href="Colaboradores.php">Colaboradores</a></li>
      <li><a href="encuestas.php">Clientes</a></li>
      <li><a href="facturacion/vercobros.php">Facturaci&oacute;n</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Proveedores</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Ciudad</th>
        <th>Servicio</th>
        <th>Documentos</th>
        <td></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2</td>
        <td>John Perez</td>
        <td>john@example.com</td>
        <td>3221753228</td>
        <td>Puerto Vallarta</td>
        <td>construccion</td>
        <td>
            <a href="">Permiso</a><p>Vigencia al: 3/12/2018</p>
            <a href="">Certificaci&oacute;n</a><p>Vigencia al: 16/11/2018</p>
        </td>
        <td><button type="button" class="btn btn-warning">Modificar</button><button type="button" class="btn btn-danger">Eliminar</button></td>
      </tr>
      <tr>
        <td>1</td>
        <td>John Perez</td>
        <td>john@example.com</td>
        <td>3221753228</td>
        <td>Puerto Vallarta</td>
        <td>construccion</td>
        <td>
            <a href="">Permiso</a><p>Vigencia al: 3/12/2018</p>
            <a href="">Certificaci&oacute;n</a><p>Vigencia al: 16/11/2018</p>
        </td>
        <td><button type="button" class="btn btn-warning">Modificar</button><button type="button" class="btn btn-danger">Eliminar</button></td>
      </tr>
      
    </tbody>
  </table>
</div>
</body>
</html>