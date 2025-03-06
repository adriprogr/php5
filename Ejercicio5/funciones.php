<?php
include_once 'conexion.php';
function consultar_instrumento($conexion, $Nombre, $Tipo, $Origen, $Modelo){
  mysqli_select_db($conexion, 'musica');
  $select = "SELECT * from instrumento where Nombre =  '$Nombre' and Tipo = '$Tipo' and Origen = '$Origen' and Modelo = '$Modelo'";
  $query = mysqli_query($conexion, $select);
          
  if(mysqli_num_rows($query) > 0){
      echo '<script>
            alert("El instrumento ya existe");
            </script>
            ';
    return $query;
  } else {
    insertar_instrumento($conexion, $Nombre, $Tipo, $Origen, $Modelo);
  }

}
function insertar_instrumento($conexion, $Nombre, $Tipo, $Origen, $Modelo){

    $insertar = "INSERT INTO instrumento(Nombre, Tipo, Origen, Modelo) values ('$Nombre', '$Tipo','$Origen', '$Modelo')";  
    $query2 = mysqli_query($conexion, $insertar);
  
    if($query2) {
        echo '<script>
             alert("El instrumento se agrego correctamente");
             </script>
             ';
    } else {
        echo '<script>
                alert("Hubo un error");
                window.location= "insertar.php";
                </script>
                ';
    }
    return $query2;
}
function consultar_instrumento_cod($conexion, $Codigo ){
   mysqli_select_db($conexion, 'musica');
        $consulta = "SELECT * FROM instrumento where Codigo = $Codigo";
        $query = mysqli_query($conexion, $consulta);

        if(mysqli_num_rows($query) > 0) {
            echo "<h1> Instrumento consultado </h1>";
            while($row = mysqli_fetch_assoc($query)){
                    echo "<table border='1'>";
                        echo "<tr>";
                        echo "<td> Nombre </td>";
                        echo "<td> Tipo </td>";
                        echo "<td> Origen </td>";
                        echo "<td> Modelo </td>";
                    echo "</tr>";

                   echo "<tr>";
                        echo "<td>" . $row['Nombre'] . "</td>";
                        echo "<td>" . $row['Tipo'] . "</td>";
                        echo "<td>" . $row['Origen'] . "</td>";
                        echo "<td>" . $row['Modelo'] . "</td>";
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
function consultar_instrumento_nom($conexion, $Nombre ){

  mysqli_select_db($conexion, 'musica');
  $consulta = "SELECT * FROM instrumento where Nombre = '$Nombre'";
  $query = mysqli_query($conexion, $consulta);

  if(mysqli_num_rows($query) > 0) {
      echo "<h1> Instrumento consultado </h1>";
      while($row = mysqli_fetch_assoc($query)){
              echo "<table border='1'>";
                  echo "<tr>";
                  echo "<td> Nombre </td>";
                  echo "<td> Tipo </td>";
                  echo "<td> Origen </td>";
                  echo "<td> Modelo </td>";
              echo "</tr>";

             echo "<tr>";
                  echo "<td>" . $row['Nombre'] . "</td>";
                  echo "<td>" . $row['Tipo'] . "</td>";
                  echo "<td>" . $row['Origen'] . "</td>";
                  echo "<td>" . $row['Modelo'] . "</td>";
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


function consultar_instrumento_Tipo($conexion, $Tipo ){

  mysqli_select_db($conexion, 'musica');
  $consulta = "SELECT * FROM instrumento where Tipo = '$Tipo'";
  $query = mysqli_query($conexion, $consulta);

  if(mysqli_num_rows($query) > 0) {
      echo "<h1> Instrumento consultado </h1>";
      while($row = mysqli_fetch_assoc($query)){
              echo "<table border='1'>";
                  echo "<tr>";
                  echo "<td> Nombre </td>";
                  echo "<td> Tipo </td>";
                  echo "<td> Origen </td>";
                  echo "<td> Modelo </td>";
              echo "</tr>";

             echo "<tr>";
                  echo "<td>" . $row['Nombre'] . "</td>";
                  echo "<td>" . $row['Tipo'] . "</td>";
                  echo "<td>" . $row['Origen'] . "</td>";
                  echo "<td>" . $row['Modelo'] . "</td>";
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

function consultar_instrumento_Origen($conexion, $Origen){

mysqli_select_db($conexion, 'musica');
$consulta = "SELECT * FROM instrumento where Origen = '$Origen'";
$query = mysqli_query($conexion, $consulta);

if(mysqli_num_rows($query) > 0) {
    echo "<h1> Instrumento consultado </h1>";
    while($row = mysqli_fetch_assoc($query)){
            echo "<table border='1'>";
                echo "<tr>";
                echo "<td> Nombre </td>";
                echo "<td> Tipo </td>";
                echo "<td> Origen </td>";
                echo "<td> Modelo </td>";
            echo "</tr>";

           echo "<tr>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Tipo'] . "</td>";
                echo "<td>" . $row['Origen'] . "</td>";
                echo "<td>" . $row['Modelo'] . "</td>";
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