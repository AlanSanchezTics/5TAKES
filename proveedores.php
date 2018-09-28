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
<label >Usuario: </label>
  <label>Default</label>
  <br>
  <a href ="" >Cerrar Sesion</a>
</div></th>
  </tr>
</table>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="solicitudes.php">Solicitudes</a></li>
      <li><a href="#" >Finanzas</a></li>
      <li><a href="#" class="selected">Proveedores</a></li>
      <li><a href="#">Colaboradores</a></li>
      <li><a href="#">Clientes</a></li>
      <li><a href="#">Facturaci&oacute;n</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Solicitudes Pendientes</h2>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Ciudad</th>
        <th>Documentos</th>
        <t></
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John Perez</td>
        <td>john@example.com</td>
        <td>3221753228</td>
        <td>
            <span class="label label-warning">Pendiente</span><span class="label label-success">Revisado</span><button type="button" class="btn btn-success">Revisar</button>
        </td>
        <td><span class="label label-warning">Sin realizar</span><span class="label label-success">Realizado</span><button type="button" class="btn btn-success">Realizar</button></td>
      </tr>
      
      
    </tbody>
  </table>
</div>
</body>
</html>