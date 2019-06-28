<?php
require_once("../helps/user_validation.php");
require_once("../conexion.php");
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$direccion=$_POST['direccion'];
$municipio=$_POST['municipio'];
$valor=$_POST['valor'];
$administracion=$_POST['administracion'];
$estado=$_POST['estado'];
$gestion=$_POST['gestion'];
$tipo=$_POST['tipo'];
$construido=$_POST['construido'];
$garaje=$_POST['garaje'];
$tipogaraje=$_POST['tipogaraje'];
$area=$_POST['area'];
$estrato=$_POST['estrato'];
$cuartos=$_POST['cuartos'];
$baños=$_POST['baños'];
//var_dump($_FILES['fotos']["name"]["1"]);
//$sql="insert into Inmuebles = values('')";
mysqli_query($db, $sql); 

mkdir('../inmueble/img/'.$_POST['codigo']);
copy('../helps/index.php','../inmueble/img/'.$_POST["codigo"].'/index.php');
$i=0;
while ($_FILES['fotos']["tmp_name"][$i]) {
    $file=$_FILES['fotos']["tmp_name"][$i];
    move_uploaded_file($file, "../inmueble/img/".$_POST['codigo']."/".$_FILES['fotos']['name'][$i]);
    $i+=1; 
}
