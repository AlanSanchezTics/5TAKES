<?php
    session_start();
    function NuevoUsuario($usuEmail,$usuNombre,$usuApaterno,$usuAmaterno,$usuTelefono,$usuClave,$usuCiudad,$usuTipo)
    {
        include "conexion.php";
        $sql = "SELECT usuID FROM tbl_usuarios where usuEmail='{$usuEmail}'";
        if(mysqli_num_rows($conexion -> query($sql)) > 0){
            echo "<script language='javascript'>";
            echo "window.location.href='Registro.php?ALREADYEXIST=true'";
            echo "</script>";
        }else{
            switch ($usuTipo) {
                case "2":
                    $usuEstatus=2;
                    break;
                case "3":
                    $usuEstatus=2;
                break;
                case "4":
                    $usuEstatus=1;
                break;
            }
            $sql = "INSERT INTO tbl_usuarios(UsuNombre, UsuApaterno, UsuAmaterno, UsuEmail, UsuTelefono, usuCiudad, UsuContraseña, UsuTipo, UsuEstatus) VALUES ('{$usuNombre}','{$usuApaterno}','{$usuAmaterno}','{$usuEmail}','{$usuTelefono}','{$usuCiudad}',AES_ENCRYPT('{$usuClave}','FIVETAKES'),{$usuTipo},{$usuEstatus})";
            if(mysqli_query($conexion,$sql) === TRUE){
                echo "<script language='javascript'>";
                echo "window.location.href='registrosuccess.php'";
                echo "</script>";
            }else{
                var_dump($sql);
            }
        }
    }
    NuevoUsuario($_POST["email"],$_POST["Nombre"],$_POST["APPaterno"],$_POST["APMaterno"],$_POST["Telefono"],$_POST["pswd"],$_POST["ciudad"],$_POST["tipo"]);
?>