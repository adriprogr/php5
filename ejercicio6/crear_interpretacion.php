<?php
include_once 'conexion.php';

$create = "CREATE TABLE interpretacion(
    id_interpretacion int primary key auto_increment,
    Codigo int,
    id int,
    foreign key(Codigo) references instrumento(Codigo),
    foreign key(id) references obras(id) 
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