<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facturacion</title>
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
    <form action="buscarfolio.php" method="POST" enctype="multipart/form-data">
<h2>Buscar Folio De Cobro</h2>
  <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input name="folio" type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
    </div> <br><br>  
    </form>  
    <h3>Resultados de b&uacute;squeda</h3>	

    
</div>
</body>
</html>