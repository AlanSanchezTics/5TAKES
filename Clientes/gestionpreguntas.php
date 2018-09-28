<!DOCTYPE html>
<html>
<head>
  <title>BancoPreguntas</title>
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
    <li><a href="../solicitudes.php" class="selected">Solicitudes</a></li>
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
        <h2>Banco de preguntas</h2>
      </th>
      <th style="text-align:right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalAgregarPregunta">
        Agregar
        </button>
      </th>
    </tr>
  </table>

  <!-- Modal -->
    <div class="modal fade" id="ModalAgregarPregunta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalAgregarPregunta">Agrega una Pregunta</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <label>¿</label>
            <input type="text" id="pregunta" style="width:500px;">
            <label>?</label>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <a href="http://localhost:8080/5TAKES/gestionpreguntas.php">
                <button type="button" class="btn btn-success">Guardar</button>
            </a>
        </div>
        </div>
    </div>
    </div>

    <!-- Focus al inpud del modal -->
    <script>
        $('#ModalAgregarPregunta').on('shown.bs.modal', function () {
            $('#pregunta').trigger('focus')
        })
    </script>

  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Pregunta</th>
        <th style="text-align:right">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Te gusto?</td>
        <td style="text-align:right">
          <button type="button" class="btn btn-warning">Modificar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </td>
      </tr>

    </tbody>
  </table>
</div>
</body>
</html>