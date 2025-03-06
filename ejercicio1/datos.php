<?php
include_once 'conexion.php';
function registrar($conexion, $Dni, $Nombre, $Apellidos, $Localidad, $Centro_Estudio, $Usuario, $Contraseña){
    $consulta = "INSERT INTO alumnos(Dni, Nombre, Apellidos, Localidad, Centro_Estudio, Usuario, Contraseña) VALUES ('$Dni', '$Nombre', '$Apellidos', '$Localidad', '$Centro_Estudio', '$Usuario', '$Contraseña')";
    $resultado = mysqli_query($conexion, $consulta);
    if($consulta){
        echo '<script>
        alert("Te has registrado correctamente");
        window.location= "inicio_sesion.html";
        </script>
        ';
    } else {
        echo '<script>
        alert("Error");
        window.location = "registro.php";
        </script>
        ';
    }
    return $resultado;
}

function consultar($conexion, $Usuario, $Contraseña){
    $consulta = "SELECT * FROM alumnos WHERE Usuario = '$Usuario' and Contraseña = '$Contraseña'";
    $resultado = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($resultado) > 0) {
        while($row = mysqli_fetch_assoc($resultado)){
            echo "Bienvenido" . " "  . $row['Nombre'] . " ". $row['Apellidos'];
            echo "<br>";
            echo "DNI:" ." ". $row['Dni'];
            echo '<br>';
            echo "Localidad:" ." ". $row['Localidad'];
            echo '<br>';
            echo "Centro_Estudio:"." " . $row['Centro_Estudio'];
            echo '<br>';
        }
    } else {
        echo '<script>
        alert("Los usuarios no coinciden");
        </script>
        ';
    }
    return $resultado;
}
?>