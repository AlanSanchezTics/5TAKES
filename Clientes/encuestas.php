<!DOCTYPE html>
<html>
<head>
  <title>Encuestas</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
</head>
<body>
<table>
  <tr>
    <th><img src="../logo.png" alt="Smiley face" width="64" height="64" class="logoprincipal"></th>
    <th><div class = "lbl">
    <a href="#"><?php session_start();
                echo $_SESSION["usuNombre"]; ?></a>
  <br>
  <a href ="" >Cerrar Sesion</a>
</div></th>
  </tr>
</table>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    <li><a href="../solicitudes.php">Solicitudes</a></li>
      <li><a href="../finanzas.php">Finanzas</a></li>
      <li><a href="../proveedores.php">Proveedores</a></li>
      <li><a href="../Colaboradores.php">Colaboradores</a></li>
      <li><a href="encuestas.php" class="selected">Clientes</a></li>
      <li><a href="../facturacion/vercobros.php">Facturaci&oacute;n</a></li>
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
       <a href="gestionpreguntas.php" class="badge badge-info" style="background-color: #5DBCD2;">Generador de Banco de Preguntas</a>
      </th>
    </tr>
  </table>

  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Ciudad</th>
        <th>Status</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "../conexion.php";

      $sql = "SELECT * FROM tbl_usuarios where UsuTipo=4";
      $result = mysqli_query($conexion, $sql);
      while ($reg = mysqli_fetch_array($result)) {
        echo '<tr>
                <th>' . $reg[0] . '</th>
                <td>' . $reg[1] . ' ' . $reg[2] . ' ' . $reg[3] . '</td>
                <td>' . $reg[4] . '</td>
                <td>' . $reg[5] . '</td>
                <td>' . $reg[6] . '</td>
                <td>';
        switch ($reg[8]) {
          case 0:
            echo '<span class="label label-danger">Inactivo</span>';
            break;
          case 1:
            echo '<span class="label label-success">Activo</span>';
            break;
        }
        echo '</td>
                <td>
          <button type="button" class="btn btn-warning">Modificar</button>
          <button type="button" class="btn btn-danger">Desactivar</button>
        </td>
              </tr>';
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>