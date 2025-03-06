<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre del instrumento">
        <br><br>
        <input type="submit">
        <br><br>
        <a href="menu.html">Volver al menu</a>
    </form>

    <?php
    include_once 'conexion.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];

        $consulta = "SELECT * FROM instrumento inner join interpretacion on instrumento.Codigo = interpretacion.Codigo_instrumento inner join obras on interpretacion.id_obra = obras.id  where instrumento.Nombre = '$nombre'";
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
            alert("El nombre introducido no pertenece a ningun instrumento. Prueba de nuevo");
            </script>
            ';
        }
    }
    ?>
</body>
</html>