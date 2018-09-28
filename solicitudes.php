<!<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
  <h2>Servicios Pendientes</h2>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Documentos</th>
        <th>Examen</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
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