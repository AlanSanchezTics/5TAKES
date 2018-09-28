<<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>documentos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 


</head>
<body>

<div class="container">
  <h2>Documentos</h2>
  <table class="table table-striped">
    <thead>
    </thead>
    <tbody>
        <?php
            include "conexion.php";
            $sql="SELECT * FROM tbl_documentos WHERE usuId={$_GET['ref']}";
            $result = mysqli_query($conexion,$sql);
            while($reg = mysqli_fetch_array($result)){
                echo '<tr>
                        <th>'.$reg[0].'</th>
                        <td><a data-toggle="modal" data-target="#myModal">'.$reg[2].'</a></td>
                        <td>
                        <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                        
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                            </div>
                            <div class="modal-body">
                            <center><img src="'.$reg[3].'" width="90%" ></center>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                        </td>
                        <td><input type="checkbox" onclick="habilitar()" name=validar id="validar"> V&aacute;lido</td>
                        <td><input type="date" id="fecha" name="fecha" disabled></td>
                    </tr>';
            }
        ?>
    </tbody>
  </table>
    <div style="text-align:right">
        <a href="solicitudes.php"><button  class="btn btn-success">guardar</button></a>
    </div>
</div>
<script>
function habilitar() {
    if(document.getElementById("validar").checked){
        document.getElementById("fecha").disabled = false;
    }
    else{
        document.getElementById("fecha").disabled = true;
    }

    
}
</script>
</body>
</html>
</body>
</html>