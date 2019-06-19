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
    <?php if(isset($_SESSION['usuario'])):  ?>
        h
        <div>
       <h3>Bienvenido <?php $_SESSION['usuario']['nombre'];?> </h3>
            <!-- Botones-->
            <a href="cerrar.php" class="boton">Cerrar sesion</a>
        </div>
        2
    <?php endif;?>
    3
</body>
</html>