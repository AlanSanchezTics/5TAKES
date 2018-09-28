<!DOCTYPE html>
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
      <li><a href="solicitudes.php" class="selected">Solicitudes</a></li>
      <li><a href="finanzas.php">Finanzas</a></li>
      <li><a href="proveedores.php">Proveedores</a></li>
      <li><a href="Colaboradores.php">Colaboradores</a></li>
      <li><a href="Clientes/encuestas.php">Clientes</a></li>
      <li><a href="facturacion/vercobros.php">Facturaci&oacute;n</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Solicitudes Pendientes</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Tipo</th>
        <th>Documentos</th>
        <th>Examen</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "conexion.php";
        $sql = "SELECT tbl_usuarios.UsuId, tbl_usuarios.UsuNombre, tbl_usuarios.UsuApaterno, tbl_usuarios.UsuAmaterno, tbl_usuarios.UsuEmail,tbl_usuarios.UsuTelefono,tbl_usuarios.UsuTipo FROM tbl_usuarios WHERE tbl_usuarios.UsuEstatus=2";
        $result = mysqli_query($conexion,$sql);
        while ($reg = mysqli_fetch_array($result)) {
          echo '<tr>
                  <th>'.$reg[0].'</th>
                  <td>'.$reg[1].' '.$reg[2].' '.$reg[3].'</td>
                  <td>'.$reg[4].'</td>
                  <td>'.$reg[5].'</td>
                  <td>';
                  switch($reg[6]){
                    case 2:
                    echo "Proveedor";
                    break;
                    case 3:
                    echo "Colaborador";
                    break;
                  }
                    echo'</td>
                  <td><a href="documentos.php?ref='.$reg[0].'"><button type="button" class="btn btn-success" id="revisar" name="'.$reg[0].'">Revisar</button></a></td>
                  <td>'; 
                  $sql = "SELECT * FROM tbl_examenes WHERE usuID={$reg[0]}";
                  if(mysqli_num_rows($conexion->query($sql))>0){
                    echo '<span class="label label-success">Realizado</span>';
                  }else{
                    echo '<span class="label label-warning">Sin realizar</span><a href="Quiz.php?ref='.$reg[0].'"><button type="button" class="btn btn-success">Realizar</button></a>';
                  }
                  echo'</td>
                  <td><a href="altaUser.php?usuID='.$reg[0].'"><button type="button" class="btn btn-success">Activar</button></a><a href="inactiveUser.php?usuID='.$reg[0].'"><button type="button" class="btn btn-danger">Denegar</button></a></td>
                </tr>';
        }
      ?>
    </tbody>
  </table>
</div>
</body>
<!---->
</html>