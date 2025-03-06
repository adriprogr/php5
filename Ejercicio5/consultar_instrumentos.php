<?php
include_once 'conexion.php';

    mysqli_select_db($conexion, 'musica');

    $select = "SELECT * from instrumento";
    $query = mysqli_query($conexion, $select);

    if(mysqli_num_rows($query) > 0) {
        echo "<h1> Instrumentos</h1>";
        while($row = mysqli_fetch_assoc($query)) {
            echo "<table border='1' >";
                echo "<tr>";
                    echo "<td> Nombre </td>";
                    echo "<td> Tipo </td>";
                    echo "<td> Origen</td>";
                    echo "<td> Modelo </td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>" . $row['Nombre'] . "</td>";
                    echo "<td>" . $row['Tipo'] . "</td>";   
                    echo "<td>" . $row['Origen'] . "</td>";
                    echo "<td>" . $row['Modelo'] . "</td>";
                echo "</tr>";
                echo "<br>";
            echo "</table>";
           echo "<br><br>";
           echo '<a href="menu.html">Volver al menu</a>';
        }
    }
?>