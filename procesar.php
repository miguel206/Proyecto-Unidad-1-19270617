<?php
$error;

session_start();

if(!empty($_POST['usuario'])&&!empty($_POST['password'])){
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    if($usuario=="usuario"&&$password=="123"){
        $error="CORRECTO";
        $_SESSION['usuario']=$usuario;
            header("Location: producto.php");
    }
    else if($usuario=="admin"&&$password=="asd"){
        $error="CORRECTO";
        $_SESSION['usuario']=$usuario;
        header("Location: grafica.php");
        

    }else{
        $error="INCORRECTO";
        header("Location: Index.php?error=$error");
    }
}else{

    $error="VACIO";
        header("Location: Index.php?error=$error");

}


?>