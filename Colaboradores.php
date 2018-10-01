<!DOCTYPE html>
<html>
<head>
  <title>Colaboradores</title>
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
  <a href ="logout.php" >Cerrar Sesion</a>
</div></th>
  </tr>
</table>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="solicitudes.php">Solicitudes</a></li>
      <li><a href="finanzas.php">Finanzas</a></li>
      <li><a href="proveedores.php">Proveedores</a></li>
      <li><a href="Colaboradores.php" class="selected">Colaboradores</a></li>
      <li><a href="Clientes/encuestas.php">Clientes</a></li>
      <li><a href="facturacion/vercobros.php">Facturaci&oacute;n</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Colaboradores</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Ciudad</th>
        <th>Documentos</th>
        <td></td>
      </tr>
    </thead>
    <tbody>
    <?php
    include "conexion.php";
    $sql = "SELECT tbl_usuarios.UsuId, tbl_usuarios.UsuNombre, tbl_usuarios.UsuApaterno, tbl_usuarios.UsuAmaterno, tbl_usuarios.UsuEmail,tbl_usuarios.UsuTelefono,tbl_usuarios.usuCiudad FROM tbl_usuarios WHERE tbl_usuarios.UsuTipo=3 AND UsuEstatus=1";
    $result = mysqli_query($conexion, $sql);
    while ($reg = mysqli_fetch_array($result)) {
      echo '<tr>
        <th>' . $reg[0] . '</th>
        <td>' . $reg[1] . ' ' . $reg[2] . ' ' . $reg[3] . '</td>
        <td>' . $reg[4] . '</td>
        <td>' . $reg[5] . '</td>
        <td>'.$reg[6].'</td>
        <td>';
        $sql="SELECT * FROM tbl_documentos WHERE usuId={$reg[0]}";
        $result2 = mysqli_query($conexion,$sql);
        while($row = mysqli_fetch_array($result2)){
          echo '<a data-toggle="modal" data-target="#myModal">'.$row[2].'</a><p>Vigencia al: '.$row[4].'</p>';
        }
        echo '
        <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                        
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                            </div>
                            <div class="modal-body">
                            <center><img src="'.$row[3].'" width="90%" ></center>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                        
                        </div>
                    </div>
        </td>
        <td><a href="modDatos.php?usuID='.$reg[0].'"><button type="button" class="btn btn-warning">Modificar</button></a><a href="inactiveUser.php?usuID='.$reg[0].'"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
              </tr>';
    }
    ?>
    </tbody>
  </table>
</div>
</body>
</html>