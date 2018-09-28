<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table>
  <tr>
    <th><img src="logo.png" alt="Smiley face" width="64" height="64" class="logoprincipal"></th>
    <th><div class = "lbl">
<label >Usuario: </label>
  <label><?php session_start(); echo $_SESSION["usuNombre"];?></label>
  <br>
  <a href ="" >Cerrar Sesion</a>
</div></th>
  </tr>
</table>

<!--Hola-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="solicitudes.php">Solicitudes</a></li>
      <li><a href="#">Finanzas</a></li>
      <li><a href="#">Proveedores</a></li>
      <li><a href="#">Colaboradores</a></li>
      <li><a href="#">Clientes</a></li>
      <li><a href="#">Facturaci&oacute;n</a></li>
    </ul>
  </div>
</nav>
<div class="container">
    
     
</div>

</body>
</html>

