<?php
include_once 'conexion.php';
function select_obra($conexion, $obra, $autor, $ano){
    $consulta = "SELECT * FROM obras where Nombre_obra = '$obra' and Autor = '$autor' and Ano_creacion = $ano;";
    $sql = mysqli_query($conexion, $consulta);

    if(mysqli_num_rows($sql) > 0){
        echo '
        <script>
        alert("La obra ya esta introducida");
        </script>
        ';

    } else {
        insertar_obra($conexion, $obra, $autor, $ano);
    }

    return $sql;
}

function insertar_obra($conexion, $obra, $autor, $ano){
    $consulta = "INSERT INTO obras(Nombre_obra, Autor, Ano_creacion) VALUES ('$obra','$autor','$ano')";
    $sql = mysqli_query($conexion, $consulta);

    if($sql){
        echo '
        <script>
        alert("Se añadio correctamente");
        </script>
        ';

    } else {
        echo '
        <script>
        alert("Error");
        ';
    }

    return $sql;
}



function insertar_interp($conexion, $Codigo, $id ){
    $consulta = "INSERT INTO interpretacion(Codigo_instrumento, id_obra) VALUES ('$Codigo','$id')";
    $sql = mysqli_query($conexion, $consulta);

    if($sql){
        echo '
        <script>
        alert("Se añadio correctamente");
        </script>
        ';

    } else {
        echo '
        <script>
        alert("Error");
        ';
        
    }
    return $sql;
}
function cons_obra_cod($conexion, $id ){

    $consulta = "SELECT * FROM obras where id = '$id'";
    $query = mysqli_query($conexion, $consulta);

    if(mysqli_num_rows($query) > 0) {
        echo "<h1> Instrumento consultado </h1>";
        while($row = mysqli_fetch_assoc($query)){
                echo "<table border='1'>";
                    echo "<tr>";
                    echo "<td> Id </td>";
                    echo "<td> Nombre_obra </td>";
                    echo "<td> Autor </td>";
                    echo "<td> Ano </td>";
                echo "</tr>";

            echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['Nombre_obra'] . "</td>";
                    echo "<td>" . $row['Autor'] . "</td>";
                    echo "<td>" . $row['Ano_creacion'] . "</td>";
                echo "</tr>";
        }
    } else {
        echo '
        <script>
        alert("El codigo introducido no pertenece a ningun instrumento. Prueba de nuevo");
        </script>
        ';    
    }
    return $query;
}


function cons_obra_nom($conexion, $nombre ){
    $consulta = "SELECT * FROM instrumento inner join interpretacion on instrumento.Codigo = interpretacion.Codigo_instrumento inner join obras on interpretacion.id_obra = obras.id  where obras.Nombre_obra = '$nombre'";
    $query = mysqli_query($conexion, $consulta);

    if(mysqli_num_rows($query) > 0) {
        echo "<h1> Instrumento consultado </h1>";
        while($row = mysqli_fetch_assoc($query)){
                echo "<table border='1'>";
                    echo "<tr>";
                    echo "<td> Id interpretacion</td>";
                    echo "<td> Codigo instrumento </td>";
                    echo "<td> Instrumento Perteneciente al codigo </td>";
                    echo "<td> Id de la obra";
                    echo "<td> Titulo de la obra";
                echo "</tr>";

               echo "<tr>";
                    echo "<td>" . $row['id_interpretacion'] . "</td>";
                    echo "<td>" . $row['Codigo_instrumento'] . "</td>";
                    echo "<td>" . $row['Nombre']  . "</td>";      
                    echo "<td>" . $row['id_obra'] . "</td>";
                    echo "<td>" . $row['Nombre_obra'] . "</td>";
                    echo "</tr>";
        }
    } else {
        echo '
        <script>
        alert("El codigo introducido no pertenece a ningun instrumento. Prueba de nuevo");
        </script>
        ';
    }
}


?>



