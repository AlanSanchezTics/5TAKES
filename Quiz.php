<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>5TAKES | Sube tus documentos.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
</head>
<body>

<div class="row">
    <div class="col">
        <img src="logo.png" alt="Smiley face" width="64" height="64" class="logoprincipal">
    </div>
    <div class="col" style="text-align:right">
    <div class="lbl">   
            <a href ="#" >Cerrar Sesion</a>
    </div>
    </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">

    </ul>
  </div>
</nav>

    <div class="container">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Antes de empezar la búsqueda de empleo he reflexionado y tengo claros cuáles son mis puntos fuertes y débiles.</td>
                <td><input type="radio" name="p1" >Si</td>
                <td><input type="radio" name="p1" >No</td>
            </tr>
            <tr>
                <td>Creo que pronto encontraré trabajo.</td>
                <td><input type="radio" name="p2" >Si</td>
                <td><input type="radio" name="p2" >No</td>
            </tr>
            <tr>
                <td>Creo que mi apariencia y aspecto (aseo personal, vestimenta, etc.) es el adecuado a los puestos de trabajo a los
            que aspiro.</td>
                <td><input type="radio" name="p3" >Si</td>
                <td><input type="radio" name="p3" >No</td>
            </tr>
            <tr>
                <td>Sé cómo debe ser mi actuación (comportamiento y actitud), en una entrevista de selección.</td>
                <td><input type="radio" name="p4" >Si</td>
                <td><input type="radio" name="p4" >No</td>
            </tr>
            <tr>
                <td>Analizo detalladamente el puesto ofertado y busco información sobre la empresa antes de presentarme a una
            entrevista.</td>
                <td><input type="radio" name="p5" >Si</td>
                <td><input type="radio" name="p5" >No</td>
            </tr>
            <tr>
                <td>Creo que la formación es muy importante para conseguir y mantener un puesto de trabajo.</td>
                <td><input type="radio" name="p6" >Si</td>
                <td><input type="radio" name="p6" >No</td>
            </tr>
            <tr>
                <td>Creo que mis compañeros/as y amistades me consideran un buen trabajador.</td>
                <td><input type="radio" name="p7" >Si</td>
                <td><input type="radio" name="p7" >No</td>
            </tr>
            <tr>
                <td>Me considero un/a buen/a profesional</td>
                <td><input type="radio" name="p8" >Si</td>
                <td><input type="radio" name="p8" >No</td>
            </tr>
            <tr>
                <td>Aceptaría un trabajo para el que tenga que cambiar mi lugar de residencia.</td>
                <td><input type="radio" name="p9" >Si</td>
                <td><input type="radio" name="p9" >No</td>
            </tr>
            <tr>
                <td>Aceptaría un trabajo para el que tenga que cambiar mi lugar de residencia.</td>
                <td><input type="radio" name="p9" >Si</td>
                <td><input type="radio" name="p9" >No</td>
            </tr>
            <tr>
                <td>Aceptaría un trabajo para el que tenga que desplazarme diariamente más de una hora.</td>
                <td><input type="radio" name="p10" >Si</td>
                <td><input type="radio" name="p10" >No</td>
            </tr>
        </tbody>
    </table>
        
        <div  style="text-align:right">
            <a href="quizvalidacion.php?ref=<?php echo $_GET['ref'];?>"><button type="submit" class="btn btn-success">Enviar</button>
        </div> 
        <form>      
    </div>

</body>
</html>