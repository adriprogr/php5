<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="Nombre" placeholder="Nombre de flauta">
        <br><br>
        <label> Elije el tipo de instrumento </label>
        <div class="tipo">
            <input type="radio" name="Tipo" value="Viento"> Viento
            <input type="radio" name="Tipo" value="Cuerda"> Cuerda
            <input type="radio" name="Tipo" value="Percusion"> Percusion
            <input type="radio" name="Tipo" value="Electrico"> Electrico
        </div>
        <br>
        <label> Origen del instrumento</label>
        <div class="Origen">
            <input type="radio" name="Origen" value="Aborigen"> Aborigen
            <input type="radio" name="Origen" value="Cubano"> Cubano
            <input type="radio" name="Origen" value="Europeo"> Europeo
            <input type="radio" name="Origen" value="Mexicano"> Mexicano
            <input type="radio" name="Origen" value="Guate"> Guate

        </div>
        <br>
        <input type="text" name="Modelo" placeholder="Modelo">
        <br><br>
        <input type="submit">
        <br><br>
        <a href="menu.html">Volver al menu</a>
    </form>

    <?php
    include_once 'funciones.php';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Nombre = $_POST['Nombre'];
            $Tipo = $_POST['Tipo'];
            $Origen = $_POST['Origen'];
            $Modelo = $_POST['Modelo'];
            
          $resultado =  consultar_instrumento($conexion, $Nombre, $Tipo, $Origen, $Modelo);
    
        }
    ?>
</body>
</html>