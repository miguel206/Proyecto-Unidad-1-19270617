<!DOCTYPE html>
<html lang="es">
<head>

<?php 
if(isset($_GET['error'])){
    $error =$_GET['error'];
    if($error=="INCORRECTO"){
        echo "<h2>El usuario o contraseña no son correctos</h2>";
    }
    if($error == "VACIO"){
        echo "<h2>Los datos enviados se encuetran vacios</h2>";
    }
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="container"> 
        <div class="row justify-content-center pt-6 mt-5 mr-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario  ">
                <form action=" procesar.php" method="POST"> 
            <div class="form-group text-center pt-3">
                <h1 class="text-light">Iniciar sesión</h1>
            </div>
        <div class="form-group mx-sm-4 pt-3">
        <form action="procesar.php" method="POST"; >  
            <label for="usuario">usuario</label>
        <input type="text" name="usuario">
        </div>
        <div class="form-group mx-sm-4 pb-3">
        <label for="password">Contraseña</label>
        <input type="text" name="password">        
    </div>
       <div class="form-group mx-sm-4 pb-2">
        <input type="submit" class="    btn btn-block ingresar" value="INGRESAR">
       </div>
       <div class="form-group mx-sm-4 text-right">
        <span class=""><a href="Olvide mi contraseña"></a></span>
       </div>
       <div class="form-group text-center">
        <span><a href=""class="olvide1">Registrarse</a></span>
       </div>
            </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
</body>
</html>