<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
        <link rel="stylesheet" href="css/styles.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#F16835">

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles_menu.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <title>Inicio</title>
    </head>
    <body>
		<!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/menu.js"></script>
    	<h3 class="form" style=" margin:  100px auto; text-align: center;">REGISTAR INMUEBLE</h3>
		<form  class="form" action="registro.php" method="post"  name="registro" enctype="multipart/form-data">
			<?php
			require_once("../agente/inmuebles.php");
			$sql="select * from Inmueble";
			$data= mysqli_query($db, $sql);
			$count=1;
			$countf="";
			while (mysqli_fetch_array($data)) {
				$count+=1;
			}
			if($count<10){
				$countf="00".$count;
			}
			if($count>=10 and $count <100){
				$countf="0".$count;
			}
			?>
			<h2>Información:</h2>
			<div class="form-group">
				<!--Codigo-->
				<div class="form-group">
				    <label for="codigo">Codigo:</label>
				    <input type="text" class="form-control" name="codigo"  value="<?php echo("$countf"); ?>" >
			  	</div>
				<!--Nombre-->
				<div class="form-group">
				    <label for="nombre">Nombre:</label>
				    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
			  	</div>
				<!--Descripcion-->
				<div class="form-group">
				    <label for="descripcion">Descripción:</label>
				    <textarea class="form-control" name="descripcion" rows="5"></textarea>
				</div>
				<!--Direccion-->
				<div class="form-group">
				    <label for="direccion">Direccion:</label>
				    <input type="text" class="form-control" name="direccion" placeholder="Calle 5 #13-86">
			  	</div>
				<!--Municipio-->
				<div class="form-group">
				    <label for="municipio">Municipio:</label>
				    <input type="text" class="form-control" name="municipio" placeholder="Floridablanca, Giron">
			  	</div>
				<!--Departamento-->
				<div class="form-group">
				    <label for="departamento">Departamento:</label>
				    <input type="text" class="form-control" name="departamento" placeholder="Santander">
			  	</div>
			  	<!--Valor-->
				<div class="form-group">
				    <label for="valor">Valor:</label>
				    <input type="text" class="form-control" name="valor" placeholder="150'000.000">
			  	</div>
				<!--Valor Administracion-->
				<div class="form-group">
				    <label for="administracion">Valor Administración:</label>
				    <input type="text" class="form-control" name="administracion" placeholder="150.000">
			  	</div>  
				<!--Estado-->
			  	<div class="form-group">
				    <label for="estado">Estado:</label>
				    <select class="form-control" name="estado">
				      <option>Activo</option>
				      <option>Finalizado</option>
				    </select>
				</div> 
				<!--Gestion-->
			  	<div class="form-group">
				    <label for="gestio">Gestion:</label>
				    <select class="form-control" name="gestion">
				      <option value="1">Venta</option>
				      <option value="2">Alquiler</option>
				    </select>
				</div>
				<!--Tipo-->
			  	<div class="form-group">
				    <label for="tipo">Tipo:</label>
				    <select class="form-control" name="tipo">
				      <option>Casa</option>
				      <option>Apartamento</option>
				    </select>
				</div>
				<!--Fotos-->
				<label for="fotos">Fotos:</label>
				<div class="custom-file">
				  	<input type="file" class="custom-file-input" lang="es" id="nombre[]" name="nombre[]" multiple="">
                    <label class="custom-file-label" for="fotos">Seleccionar Archivo</label>
				</div>
			</div>
			<h2>Caracteristicas:</h2>
			<div class="form_group">
				<!--Construido-->
				<div class="form-group">
				    <label for="construido">Tiempo de Construido:</label>
				    <input type="text" class="form-control" name="construido" placeholder="9 Años">
			  	</div>
				<!--Garaje-->
				<div class="form-group">
				    <label for="garaje">Garaje:</label>
				    <input type="text" class="form-control" name="garaje" placeholder="Sí/No">
			  	</div>
				<!--Tipo de Garaje-->
				<div class="form-group">
				    <label for="tipogaraje">Tipo de Garaje:</label>
				    <input type="text" class="form-control" name="tipogaraje" placeholder="Cubierto/Aire libre/No aplica...">
			  	</div>
				<!--Area-->
				<div class="form-group">
				    <label for="area">Area m&sup2:</label>
				    <input type="text" class="form-control" name="area" placeholder="70 ">
			  	</div>
				<!--Estrato-->
				<div class="form-group">
				    <label for="area">Estrato:</label>
				    <input type="text" class="form-control" name="estrato" placeholder="4 ">
			  	</div>
				<!--Cuartos-->
				<div class="form-group">
				    <label for="cuartos">N° Cuartos:</label>
				    <input type="text" class="form-control" name="cuartos" placeholder="3 ">
			  	</div>
				<!--Baños-->
				<div class="form-group">
				    <label for="baños">N° Baños:</label>
				    <input type="text" class="form-control" name="baños" placeholder="2">
			  	</div>
			</div>
			<input type="submit" class="btn btn-primary" value="Registrar">
		</form>
	</body>