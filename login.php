<!DOCTYPE html>
<html lang="en">
<head>
        <title>Iniciar Sesion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="login-form">

    <form action="conexion_usuario.php" method="post">
        <h2 class="text-center">Inicio de sesión</h2>   
        <div class="form-group">
          <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="required">       
            </div>
        </div>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">       
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-success login-btn btn-block">Ingresar</button>
        </div>

    </form>
    
</div>
</body>
</html>