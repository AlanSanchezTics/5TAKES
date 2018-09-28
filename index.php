<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenido a 5Takes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-icon.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <style>
        #logo {
            margin: 100px 0 0 0;
            width: 92px;
            height: 92px;
        }

        body {
            background-color: white;
        }
    </style>
    <script>
            function enviar() {
                var user = document.getElementById("user").value;
                var pass = document.getElementById("password").value;

                if(user === ""){
                    document.getElementById("messageuser").innerText="Ingresa un correo electronico";
                    document.getElementById("messageuser").style.color="red";
                    document.getElementById("user").style.borderColor="red";
                    document.getElementById("messagepass").innerText="";
                    document.getElementById("password").style.borderColor="green";
                    return false;
                }else if(pass === ""){
                    document.getElementById("messagepass").innerText="Ingresa tu contraseña";
                    document.getElementById("messagepass").style.color="red";
                    document.getElementById("password").style.borderColor="red";
                    document.getElementById("messageuser").innerText="";
                    document.getElementById("user").style.borderColor="green";
                    return false;
                }else{
                    return true;
                }
            }


            //hola
            </script>
</head>

<body>
    <div>
        <form method="POST" action="validacion.php" onsubmit="return enviar();">
            <div class="section-header">
                    <img src="logo.png" id="logo" name="logo"/>
                <h2>5Takes</h2>
                <p class="wow fadeInDown animated">Iniciar sesión</p>
                <table class="wow fadeInDown animated" align="center">
                    <tr>
                        <td>
                            <?php
                                if(isset($_GET["INACTIVE"])){
                                    echo '<div class="alert alert-danger" role="alert">Tu cuenta ha sido desactivada.</div>';
                                }else if(isset($_GET["wrongAccess"])){
                                    echo '<div class="alert alert-danger" role="alert">Datos de acceso incorrectos.</div>';
                                }
                            ?>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <input class="form-control" type="text" name="user" id="user" placeholder="Correo electronico">
                                </div>
                                <div id="messageuser"></div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </span>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña">
                                </div>
                                <div id="messagepass"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" name="send" class="btn btn-success btn-lg btn-block" style="border-radius: 5pt;">Entrar
                                    <span class="glyphicon glyphicon-log-in"></span></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>

</html>