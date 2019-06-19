<?php
//iniciar sesion y conexion adb
require_once 'conexion.php';

// recoger datos de formulario
if(isset($_POST)){
    $cedula= trim($_POST['user']);
    $password=$_POST['password'];

    //cunsulta para comprobar credencialels
    $sql="select * from agente where cedula='$cedula'";
    $login= mysqli_query($db, $sql); 
    if($login && mysqli_num_rows($login)==1){
        $usuario= mysqli_fetch_assoc($login);
        //comprobar contraseña
        $verify = password_verify($password, $usuario['contraseña']);
        if($verify){
            // utilizar sesion para guardar usuario logeados
            $_SESSION['usuario']=$usuario;
            if(isset($_SESSION['error_login'])){
                unset($_SESSION["error_login"]);
                //session_unset($_SESSION['error_login']); 
            }
            
        } else {
            //si falla, enviar session de error

            $_SESSION['error_login']="Login incorrecto";
        }
    } else {
         $_SESSION['error_login']="Login incorrecto";    
    }   
}

//var_dump($_SESSION['usuario']);
//var_dump($_SESSION['error_login']);
//die();

header("Location: inndex.php");