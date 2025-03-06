<?php
include_once 'datos.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    
    $resultado = consultar($conexion, $Usuario, $Contraseña );    
   

}
