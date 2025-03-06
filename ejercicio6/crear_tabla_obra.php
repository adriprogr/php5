<?php
include_once 'conexion.php';

$create = "CREATE TABLE Obras(
    id int primary key auto_increment,
    Nombre_obra varchar(255), 
    Autor varchar(255),
    Ano_creacion year
)";

$sql = mysqli_query($conexion, $create);

if($sql){
    echo '
    <script>
    alert("La tabla se creo");
    window.location = "inicio.html";
    </script>
    ';
} else {
    echo '
    <script>
    alert("La tabla ya se ha creo");
    </script>
    ';
}
?>