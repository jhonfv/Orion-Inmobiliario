<?php
require_once("../conexion.php");
require_once("../helps/user_validation.php");
//require_once("../helps/user_header.php");
$codigo=$_GET['codigo'];
$sql="select * from Inmueble where Codigo_Inmueble='$codigo'";
//var_dump($sql);
$data=mysqli_query($db, $sql);
$inmueble=mysqli_fetch_array($data);?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>
<style>
body {
  margin:10px;
}

#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }

</style>



<h2>Caracteristicas:<br> <?php echo($inmueble["Nombre"]);?></h2>
<section class="row">
    <div class="col-md-1">
        <p>
            Codigo: <?php echo($inmueble["Codigo_Inmueble"]);?>
        </p>
        <p> 
            Municipio: <?php echo($inmueble["Cod_Municipio"]);?>
        </p>
        <p>
           Direccion: <?php echo($inmueble["Direccion"]);?>
        </p>
        <p>
           Tipo: <?php echo($inmueble["Cod_Tipo"]);?>
        </p>
        <p>
            Gestion: <?php echo($inmueble["Cod_Gestion"]);?>
        </p>
        <p>
           Valor: <?php echo($inmueble["Valor"]);?>
        </p>
        <p>
           Area: <?php echo($inmueble["Area"]);?>
        </p>
    </div>
    <div class="col-md-1" >
        <p>
            Antigüeda: <?php echo($inmueble["Tiempo_Construido"]);?>
        </p>
        <p> 
            Garagje: <?php echo($inmueble["Garaje"]);?>
        </p>
        <p> 
            Tipo Garagje: <?php echo($inmueble["Tipo_Garaje"]);?>
        </p>
        <p>
           N° Baños: <?php echo($inmueble["Numero_Banos"]);?>
        </p>
        <p>
           N° Cuartos: <?php echo($inmueble["Numero_Cuartos"]);?>
        </p>
        <p>
           Estrato: <?php echo($inmueble["Estrato"]);?>
        </p>
    </div>
</section>
<section>
    <div>
        <p>
        Descripcion:<br>
        <?php echo($inmueble["Descripcion"]);?>
        </p>
    </div>
</section>

<?php
        $directorio = 'img/001/';

$directorio = opendir("img/001/"); //ruta actual
?>
 <!-- Page Content -->
   <div class="container page-top">
        <div class="row">
            <?php 
            while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
            {
                if (!is_dir($archivo))//verificamos si es o no un directorio
                { ?>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="img/001/<?php echo($archivo);?>" class="fancybox" rel="ligthbox">
                    <img  src="img/001/<?php echo($archivo);?>" class="zoom img-fluid "  alt="">
                   
                </a>
                    </div>
                <?php
                }
            }
            ?>                     
       </div>   
    </div>
</body>
</html>                