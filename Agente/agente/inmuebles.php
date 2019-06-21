<?php 
require_once '../conexion.php';
$sql="select * from Inmueble";
$data= mysqli_query($db, $sql);
$Inmueble= mysqli_fetch_assoc($data);
//session_start();
$_SESSION['Inmueble']=$Inmueble;
//var_dump($Inmueble);
//die();
