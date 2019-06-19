<?php
//iniciar sesion y conexion adb
require_once 'conexion.php';

// recoger datos de formulario
$error=0;
if(isset($_POST)){
    $cedula= trim($_POST['user']);
    $password=$_POST['password'];

    //cunsulta para comprobar credencialels
    $sql="select * from Prueba_agente where cedula='$cedula'";
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
            $error=1;
            $_SESSION['error_login']="Login incorrecto";
        }
    } else {
        $error=1;
         $_SESSION['error_login']="Login incorrecto";    
    }   
}

if ($error==1) {
    header("Location: index.php");
}
else{
    header("Location: agente/inndex.php");
}