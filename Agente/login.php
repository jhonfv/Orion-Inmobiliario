<?php
//iniciar sesion y conexion adb
require_once 'conexion.php';
session_start();
// recoger datos de formulario
$error=0;
if(isset($_POST)){
    $cedula= trim($_POST['user']);
    $password=$_POST['password'];

    //consulta para comprobar credencialels
    $sql="select * from Prueba_agente where cedula='$cedula'";
    $login= mysqli_query($db, $sql); 
    if($login && mysqli_num_rows($login)==1){
        $usuario= mysqli_fetch_assoc($login);
        //comprobar contraseña
        $verify = password_verify($password, $usuario['contraseña']);
        if($verify){
            // utilizar session para guardar usuario logeados
            $_SESSION['usuario']=$usuario;
            //var_dump($_SESSION['usuario']);
            //die();
            //destruir session de error caducada
            if(isset($_SESSION['error_login'])){
                unset($_SESSION["error_login"]);
            }
            
        } else {
            $error=1;
        }
    } else {
        $error=1;
    }   
}else {
    $_SESSION['error_login']="Datos vacios ";
}

if ($error==1) {
    //si falla, enviar session de error
    $_SESSION['error_login']="Login incorrecto";
    header("Location: index.php");
}
else{
    //var_dump($_SESSION["usuario"]);
    //die();
    header("Location: agente/index.php");
}