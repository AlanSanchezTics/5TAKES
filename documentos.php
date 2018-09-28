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
      <tr>
        <td>1</td>
        <td>
            <a data-toggle="modal" data-target="#myModal">Permiso-para-laborar</a>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                    </div>
                    <div class="modal-body">
                    <center><img src="logo.png" width="90%" ></center>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                
                </div>
            </div>
        </td>
        <td><input type="checkbox" onclick="habilitar()"> V&aacute;lido</td>
        <td><input type="date" id="fecha"></td>
    </tr>
    <tr>
        <td>2</td>
        <td>
            <a data-toggle="modal" data-target="#myModal">Permiso-para-laborar</a>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                    </div>
                    <div class="modal-body">
                    <center><img src="logo.png" width="90%" ></center>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                
                </div>
            </div>
        </td>
        <td><input type="checkbox"> V&aacute;lido</td>
        <td><input type="date" id="fecha"></td>
    </tr>
    </tbody>
  </table>
    <div style="text-align:right">
        <button  class="btn btn-success">guardar</button>
    </div>
</div>
<script>
function habilitar() {
    document.getElementById("fecha").disabled = true;
}
</script>
</body>
</html>
</body>
</html>