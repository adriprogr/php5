<?php
include_once 'conexion.php';

$base = "CREATE DATABASE Musica";
$query = mysqli_query($conexion, $base);

if($query){
    echo '
    <script>
    alert("Base de datos creada correctamente");
    window.location= "Menu.html";
    </script>
    ';
} else {
    echo '
    <script>
    alert("La base de datos ya existe");
    window.location= "Menu.html";

    </script>
    '; 
}

?>