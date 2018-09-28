<!DOCTYPE html>
<html>
<head>
  <title>Proveedores</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    <a href="#"><?php session_start();
                echo $_SESSION["usuNombre"]; ?></a>
  <br>
  <a href ="logout.php" >Cerrar Sesion</a>
</div></th>
  </tr>
</table>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    <li><a href="solicitudes.php">Solicitudes</a></li>
      <li><a href="finanzas.php" class="selected">Finanzas</a></li>
      <li><a href="proveedores.php">Proveedores</a></li>
      <li><a href="Colaboradores.php">Colaboradores</a></li>
      <li><a href="Clientes/encuestas.php">Clientes</a></li>
      <li><a href="facturacion/vercobros.php">Facturaci&oacute;n</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Detalles de Finanzas</h2>
  <h3>Pedro Meza</h3>
  <?php
  include "conexion.php";



  ?>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Servicio</th>
        <th>Fecha</th>
        <th>Comentarios</th>
        <th>Total</th>
        <th>Comision</th>
        <th>Ganancia</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'conexion.php'; 
      
      $idusuario=$_SESSION["usuID"];
      $sentencia="SELECT *FROM tbl_trabajosrealizados,tbl_dettrabajos,tbl_asignacionservicios,tbl_servicios where tbl_trabajosrealizados.dettrabid=tbl_dettrabajos.dettrabid and tbl_asignacionservicios.ProvId=tbl_servicios.ServId and  tbl_trabajosrealizados.colid={$idusuario};";
    $resultado = $conexion -> query($sentencia);
     while($filas = $resultado -> fetch_array()){               
      echo "<tr>";
          echo "<td>"; echo $filas[0]; echo "</td>";
          echo "<td>"; echo $filas[16]; echo "</td>";
          echo "<td>"; echo $filas[7]; echo "</td>";
          echo "<td>"; echo $filas[9]; echo "</td>";
          echo "<td>$"; echo $filas[3]; echo "</td>";
          echo "<td>$"; echo $comision=$filas[3]-($filas[3]*0.70); echo "</td>";
          echo "<td>$"; echo $ganancia=($filas[3]/1.3); echo "</td>";
      echo "</tr>";     
      }

      ?>
    </tbody>
  </table>
</div>
</body>
</html>