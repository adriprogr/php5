<?php
include_once 'datos.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Dni = $_POST['Dni'];
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Localidad = $_POST['Localidad'];
    $Centro_Estudio = $_POST['Centro_Estudio'];
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];

    $resultado =  registrar($conexion, $Dni, $Nombre, $Apellidos, $Localidad, $Centro_Estudio, $Usuario, $Contraseña);
  

}
?>