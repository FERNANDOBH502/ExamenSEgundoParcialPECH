<?php session_start();

print_r($_SESSION["name"]);
 if( $_SESSION['login']) {
  // echo "si estoy logueado";
   
 
 }else{
   echo "No estoy logueado";
  header('Location: login.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'Configuracion.php'; ?>

  <!-- Theme Made By www.w3schools.com -->
  <title>Menu DB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 310px 25px;
    font-family: Montserrat, sans-serif;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">PROYECTO FERNANDO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">PRODUCTOS</a></li>
        <li><a href="VerCarta.php">COMPRAS</a></li>
                <li><a href="cierre.php">Cerrar sesion</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Base de Datos</h1> 
  <p>Universidad UNID Cancun</p> 
  <form>
    <div class="input-group">
      </div>
    </div>
  </form>
</div>

</body>
</html>
