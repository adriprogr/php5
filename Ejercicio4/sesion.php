<?php
include_once 'funciones.php';

if($_SERVER['REQUEST_METHOD'] = 'POST'){
    $DNI = $_POST['DNI'];
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Localidad = $_POST['Localidad'];
    $Año = $_POST['Año'];
    $Modo_acceso = $_POST['Modo_acceso'];

    $insercion = consultar($conexion, $DNI, $Nombre, $Apellidos, $Localidad, $Año, $Modo_acceso);

   
}

?>

