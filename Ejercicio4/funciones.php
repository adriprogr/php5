<?php
include_once 'conexion.php';

function consultar($conexion, $DNI, $Nombre, $Apellidos, $Localidad, $Año, $Modo_acceso){
    $consulta = "SELECT * FROM alumnos WHERE DNI= '$DNI'";
    $query = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($query) > 0){
        echo '
        <script>
        alert("El usuario esta repetido");
        window.location ="insercion.html";
        </script>
        '; 
        } else {
        insertar($conexion, $DNI, $Nombre, $Apellidos, $Localidad, $Año, $Modo_acceso);
    }
    return $query;

}

function insertar($conexion, $DNI, $Nombre, $Apellidos, $Localidad, $Año, $Modo_acceso){
    $insertar = "INSERT INTO alumnos(DNI, Nombre, Apellidos, Localidad, Año, Modo_acceso) VALUES('$DNI','$Nombre', '$Apellidos', '$Localidad','$Año', '$Modo_acceso')";
    $query = mysqli_query($conexion, $insertar);
    if($query){
        echo '
        <script>
        alert("Se ha registrado el usuario correctamente");
        window.location ="insercion.html";
        </script>
        ';
        echo "<a href='menu.html'"; 

    } else {
        echo '<script>
        alert("Error");
        window.location "insercion.html";
        </script>
        ';
    }
    return $query;
}

function matricula_select($conexion, $DNI, $Codigo) {
        $consulta = "SELECT DNI FROM matricula where codigo = '$Codigo' and DNI = '$DNI'";
        $query2 = mysqli_query($conexion, $consulta);
        if(mysqli_num_rows($query2) > 0) {
            echo 
            '<script>
            alert("El usuario ya esta matriculado en estas asignaturas");
            window.location = "matricula.php";
            </script>
            '; 

        } else {
            matricula_insert($conexion, $DNI, $Codigo);
        }
    return $query2;

    }


 function matricula_insert($conexion, $DNI, $Codigo){
         $insercion = "INSERT INTO matricula(DNi, Codigo) VALUES ('$DNI', '$Codigo')";
         $resultado = mysqli_query($conexion, $insercion);
         if($resultado){
            echo 
            '<script>
            alert("Usuario matriculado correctamente");
            window.location = "matricula.php";
            </script>
            ';

       } else {
           echo 
           '<script>
           alert("El usuario no se pudo matricular. Intentelo de nuevo");
           window.location = "matricula.php";
           </script>
           ';
           echo "<a href='menu.html'"; 

        }  
    
    return $resultado;

}

function comprAsig($conexion){
    $consulta = "SELECT * FROM asignaturas";
    $query = mysqli_query($conexion, $consulta);
    if($query) {
        echo "Asignaturas Disponibles";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td> Id_Asignatura</td>";
        echo "<td> Nombre_Asignatura </td>";
        echo "<td> Numero_creditos </td>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                 echo "<td>". $row['Codigo'] . "</td>";
                 echo "<td>" . $row['Nombre_asig'] . "</td>";
                 echo "<td>" . $row['Numero_creditos'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";
        echo "<a href='menu.html'> Volver al menu";


    }

    return $query;
}

function compMatr($conexion){    
    $consulta = "SELECT * FROM matricula inner join alumnos on matricula.DNI = alumnos.DNI inner join asignaturas on asignaturas.Codigo = matricula.Codigo";
    $query = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($query) > 0) {
        echo "Matriculas";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td> DNI</td>";
        echo "<td> Nombre_alumno </td>";
        echo "<td> Asignatura </td>";
        echo "</tr>";
        echo "<br>";
        while ($row = mysqli_fetch_assoc($query)){          
                echo "<tr>";
                    echo "<td>" . $row['DNI'] . "</td>";
                    echo "<td>" . $row['Nombre'] . "</td>";
                    echo "<td>" . $row['Nombre_asig'] . "</td>";
                echo "</tr>";
                  
        }
        echo "</table>";
        echo "<a href='menu.html'> Volver al menu";

    return $query;
    
    }
}

function compAlum($conexion){
    $consulta = "SELECT * FROM alumnos";
    $query = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($query) > 0) {
        echo "Alumnos registrados";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td> DNI</td>";
        echo "<td> Nombre_alumno </td>";
        echo "<td> Apellidos </td>";
        echo "<td> Localidad</td>";
        echo "<td> Año </td>";
        echo "<td> Modo acceso </td>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($query)){
                echo "<tr>";
                echo "<td>" . $row['DNI'] . "</td>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Apellidos'] . "</td>";
                echo "<td>" . $row['Localidad'] . "</td>";
                echo "<td>" . $row['Año'] . "</td>";
                echo "<td>" . $row['Modo_acceso'] . "</td>";
                echo "</tr>";
    
        }
        echo "<a href='menu.html'> Volver al menu";
        echo "</table>";                

    }

    return $query;
}
?>