<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
	<link rel="stylesheet" href="css/styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#F16835">
	<title>Inicio</title>
</head>
<body>
	<div class="contenedor">
		<img class="img" src="https://www.habitarinversiones.com/wp-content/uploads/2016/07/logo-habitar-e1468550422973.png">
		<form action="login.php" method="post" class="formulario" id="formulario" name="formulario">
			<input class="formulario-input" type="text" name="user" placeholder="Usuario">
			<input class="formulario-input" type="password" name="password" placeholder="Contraseña">
			<input type="submit" name="out" class="btn" value="Iniciar secion">
		</form>
		<?php session_start() ?>
		<?php 
		if (isset($_SESSION['usuario'])) {
			unset($_SESSION['usuario']);
		}

		?>
	    <?php if(isset($_SESSION['error_login'])){
	    echo("<ul class='error_login'><li>".$_SESSION['error_login']." error!</li></ul>");
	    }
	    ?>
		<div class="enlace">
			<a href="#">Olvide mi contraseña</a>
		</div>
	</div>
</body>
</html>