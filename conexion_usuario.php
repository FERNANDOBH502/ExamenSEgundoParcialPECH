
<?php

    require_once 'Configuracion.php';

    $usr = $_POST["usuario"];
    $pass = $_POST["password"];
   

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'carta';

    $mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    $consulta = "SELECT * FROM clientes WHERE email = '$usr'";
    $resultado = mysqli_query($mysqli, $consulta);
    $fila = mysqli_fetch_array($resultado);
   

    if (sizeof($fila) > 0) {
        if ($fila["password"] == $pass) {
            session_start();
            $_SESSION["login"]= true;
            $_SESSION["id"] = $fila["id"];
            $_SESSION["name"] = $fila["name"];
            $_SESSION["status"] = $fila["status"];
            
            $respuesta = 1;
        } else {
            $respuesta = 'La contraseña no coincide con el usuario';
        }
    } else {
        $respuesta = 'Usuario no encontrado' . $consulta;
    }
 
  
       


    if($usuario  == '' && empty($pass)){
        $respuesta = 'Los valores no deben ser vacios';
        header('Location: login.php?data='. $respuesta);
    }else{
        $respuesta = $respuesta;
        if($respuesta == 1){
            header('Location: menu2.php');
        }
        else{
            header('Location: login.php?data='. $respuesta);
        }
    }
    
?>