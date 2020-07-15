<?php
session_start();


 if( $_SESSION['login']) {
  // echo "si estoy logueado";
   
 
 }else{
   echo "No estoy logueado";
  header('Location: login.php');
 }



include 'Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>MENU INCIO</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 20px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
</head>
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="VerCarta.php">Ver Carta</a></li>
  <li role="presentation"><a href="Pagos.php">Pagos</a></li>
  <li role="presentation"><a href="cierre.php">Cerrar sesion</a></li>
</ul>
</div>

<div class="panel-body">
    <h1>Catalogo de Productos</h1>
    <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">



       <?php
       //error core

$query = $db->query("SELECT* FROM mis_productos
left join categoria on fk_categoria = id_categoria
LEFT JOIN colores ON fk_colores = id_color ORDER BY id DESC LIMIT 10");
       if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){

        //error de llamados 
            //$query = $db->query("SELECT * FROM `mis_productos` LEFT JOIN colores ON fk_colores = id_color ORDER BY id DESC LIMIT 10");        
    //$query = $db->query("SELECT * FROM mis_productos left join categoria on fk_categoria = id_categoria  ORDER BY id DESC LIMIT 10");
        //if($query->num_rows > 0){ 
            //while($row = $query->fetch_assoc()) { ?>



                <div class="item col-lg-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                            <h4 class="list-group-item-heading"><?php echo $row["nombre_categoria"]; ?></h4>
                            <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                            <h4 class="list-group-item-text"><?php echo $row["nombre_color"]; ?></h4>   

                            <div class="row">
                                <div class="col-md-6">
                                    <p class="lead"><?php echo '$'.$row["price"].' MXN'; ?></p>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar a la Carta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }
        } else { ?>
            <p>Producto(s) no existe.....</p>
        <?php } ?>
    </div>
        </div>
 <div class="panel-footer">SELECCIONAR PEDIDO</div>
 </div><!--Panek cierra-->
 
</div>
</body>
</html>