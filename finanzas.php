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
  <h2>Finanzas</h2>
  <form method="GET" action="finanzas.php">
  <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control" name="ref"  placeholder="Correo Electronico" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
    </div> </form> <br><br>
    <?php
      include "conexion.php";
      if(isset($_GET["ref"])){
        echo '<h3>Resultados de b&uacute;squeda</h3>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nombre</th>
              <th>Total</th>
              <th>Comision</th>
              <th>Ganancia</th>
              <th></th>
            </tr>
          </thead>
          <tbody>';
      $sql = "SELECT colId FROM tbl_asignacionprov,tbl_usuarios WHERE tbl_asignacionprov.ProvId = tbl_usuarios.UsuId AND tbl_usuarios.UsuEmail = '{$_GET["ref"]}'";
      $result = mysqli_query($conexion,$sql);
      if($reg = mysqli_fetch_array($result)){
      $sql="SELECT tbl_usuarios.UsuId, tbl_usuarios.UsuNombre, tbl_usuarios.UsuApaterno, tbl_usuarios.UsuAmaterno, SUM(tbl_trabajosrealizados.Total),(SUM(tbl_trabajosrealizados.Total)*0.30),(SUM(tbl_trabajosrealizados.Total)/1.30) FROM tbl_trabajosrealizados, tbl_usuarios WHERE tbl_trabajosrealizados.ColId = tbl_usuarios.UsuId AND tbl_trabajosrealizados.ColId={$reg[0]}";
        $result = mysqli_query($conexion,$sql);
        while($reg = mysqli_fetch_array($result)){
          echo '<tr>
                  <th>'.$reg[0].'</th>
                  <td>'.$reg[1].' '.$reg[2].' '.$reg[3].'</td>
                  <td>$'.$reg[4].'</td>
                  <td>$'.$reg[5].'</td>
                  <td>$'.$reg[6].'</td>
                  <td><a href="detallefinanzas.php?ref='.$reg[0].'">Ver detalles</a></td>
                </tr>';
        }
      }    
      echo '</tbody>
        </table>';
      }
    ?>   
    <!---->
</div>

</body>
</html>