<!<!DOCTYPE html>
<html>
<head>
  <title>solicitudes</title>
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
      <li><a href="#">Finanzas</a></li>
      <li><a href="proveedores.php">Proveedores</a></li>
      <li><a href="Colaboradores.php">Colaboradores</a></li>
      <li><a href="encuestas.php" class="selected">Clientes</a></li>
      <li><a href="#">Facturaci&oacute;n</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  
  <table>
    <tr>
      <th>
      <h2>Encuestas de Satisfacción</h2>
      </th>
      <th style="text-align:right">
       <a href="#" class="badge badge-info">Generador de Banco de Preguntas</a>
      </th>
    </tr>
  </table>
  <style type="text/css">
    .badge {
    background-color: #5DBCD2; }
  </style>

  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Status</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John Perez</td>
        <td>john@example.com</td>
        <td>3221753228</td>
        <td>Calle Paquito 5 Av.Arboleda</td>
        <td>
            <span class="label label-warning">Inactivo</span>
            <span class="label label-success">Activo</span>
        </td>
        <td>
          <button type="button" class="btn btn-success">Modificar</button>
          <button type="button" class="btn btn-warning">Desactivar</button>
        </td>
      </tr>
      
      <tr>
        <td>2</td>
        <td>John Perez</td>
        <td>john@example.com</td>
        <td>3221753228</td>
        <td>Calle Paquito 5 Av.Arboleda</td>
        <td>
            <span class="label label-warning">Inactivo</span>
            <span class="label label-success">Activo</span>
        </td>
        <td>
          <button type="button" class="btn btn-success">Modificar</button>
          <button type="button" class="btn btn-warning">Desactivar</button>
        </td>
      </tr>
      
      <tr>
        <td>3</td>
        <td>John Perez</td>
        <td>john@example.com</td>
        <td>3221753228</td>
        <td>Calle Paquito 5 Av.Arboleda</td>
        <td>
            <span class="label label-warning">Inactivo</span>
            <span class="label label-success">Activo</span>
        </td>
        <td>
          <button type="button" class="btn btn-success">Modificar</button>
          <button type="button" class="btn btn-warning">Desactivar</button>
        </td>
      </tr>

    </tbody>
  </table>
</div>
</body>
</html>