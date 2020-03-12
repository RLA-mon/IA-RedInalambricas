<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $usuario=$_POST['e'];
    $contra=$_POST['p'];

    $db_host="localhost";
    $db_nombre="arduino";
    $db_usuario="root";
    $db_contra="";
    $verificador=0;

    //$gestor = fopen(filename, mode)
    $mysqli = new mysqli($db_host,$db_usuario,$db_contra,$db_nombre);
    if(mysqli_connect_errno()){
        echo "conexion fallida";
        exit();
    }
    $tiporadio=$_POST['validar'];
    if ($tiporadio=='admin') {
            if($resultado=$mysqli->query("SELECT * FROM usuarios WHERE usuarios_us='$usuario' && password_us='$contra'")){
                $filas = $resultado->num_rows;
                if ($filas>0) {
                    header("location:../ArduinoRFID/usuarios");
                }else{
                    header("location:../ArduinoRFID/usuarios");     
                   
                }
            }
    }else if($tiporadio=='user'){

         if($resultado=$mysqli->query("SELECT * FROM profesor WHERE usuario_pr='$usuario' && password_pr='$contra'")){
                $filas = $resultado->num_rows;
                if ($filas>0) {
                    header("location:../ArduinoRFID/registrospro");
                }else{
                    echo '<script language="javascript">alert("Usuario invalido");</script>';      
                    include 'Login.html';
                }
            }
    }else{
        echo '<script language="javascript">alert("ERES USUARIO O SUPERVISOR!!");</script>';      
        include 'login1.html';
    }
 
?>

</body>
</html>