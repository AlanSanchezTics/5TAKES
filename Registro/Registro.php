<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>5TAKES | Registrate ahora y comienza a ganar.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
<div class="row">
    <div class="col" style="background-color:lavender; text-align:center;">
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <div class="form-group">
    <img src="logo.png" alt="Smiley face" width="30%" height="30%" class="logoprincipal">
    </div>
    <div class="form-group">
    <h1 class="text-success">ES TU MOMENTO!!</h1>
    </div>
    <div class="form-group">
    <h1 class="text-success">REGISTRATE AHORA MISMO</h1>
    </div>
    </div>
    </div>
    </div>
    <div class="col" style="background-color:lavender;">
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <div class="form-group">
    <h1 class="text-success" style="text-align:center;">Registro<h1>
    </div>
    <form class="form-group" action="RegistroNuevo.php" method="POST">
    <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Ingresa tu E-Mail" name="email">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="nombre" placeholder="ingresa tu nombre" name="Nombre">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="APPaterno" placeholder="Ingresa Apellido Paterno" name="APPaterno">
   </div>
   <div class="form-group">
    <input type="text" class="form-control" id="APMaterno" placeholder="Ingresa Apellido Materno" name="APMaterno">
    </div>
    <div class="form-group">
    <input type="tel" class="form-control" id="telefono" placeholder="Ingresa Telefono" name="Telefono">
    </div>
    <div class="form-group">
    <input type="password" class="form-control" id="pwd" placeholder="Ingresa Contraseña" name="pswd">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="ciudad" placeholder="Ingresa ciudad" name="ciudad">
    </div>
    <div class="form-group">
  <label for="sel1">Selecciona Tipo de Usuario:</label>
  <select class="form-control" name="tipo" id="sel1">
    <option value="2">Proveedor</option>
    <option value="3">Colaborador</option>
    <option value="4">Usuario</option>
  </select>
</div>
    <button type="submit" class="btn btn-primary">Comienza Ahora!!</button>
  </form>
    </div>
    </div>
    </div>
  
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>