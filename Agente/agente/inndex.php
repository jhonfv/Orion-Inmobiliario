<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#F16835">
    <title>Inicio</title>
</head>
<body>
    1
    <?php session_start() ?>
    <?php 
        var_dump($_SESSION['usuario']);
        die();
        k
        echo "Hola";
    ?>
        <?php if(isset($_SESSION['error_login'])){
            echo("<h3> ".$_SESSION['error_login']." error</h3>");
        }
        else{
            echo "hola ".$_SESSION['usuario']['nombre'];
        }
    ?>
    4
</body>
</html>