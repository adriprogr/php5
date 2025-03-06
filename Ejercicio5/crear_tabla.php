<?php
include_once 'conexion.php';
mysqli_select_db($conexion, 'musica');

$tabla = "CREATE TABLE instrumento (
Codigo INT PRIMARY KEY auto_increment,
Nombre varchar(255),
Tipo varchar(255),
Origen varchar(255),
Modelo varchar(255)
);";

$query = mysqli_query($conexion, $tabla);

if($query) {
    echo '
    <script>
    alert("La tabla se creo correctamente");
    window.location = "Menu.html"; // Redirige a Menu.html después del mensaje
    </script>
    ';
} else {
    echo '
    <script>
    alert("La tabla ya existe");    
    window.location= "Menu.html";
    </script>
    ';

}

?>