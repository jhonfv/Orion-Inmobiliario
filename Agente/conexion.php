<?php
//conexion
$host='habitarinversiones.com';
$user='dba_orion';
$password='#D4njh019#';
$database='orion_inmobiliaria';

$db=mysqli_connect($host, $user, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

//iniciar
//session_start();