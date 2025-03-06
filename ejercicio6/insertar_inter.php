<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="Codigo" placeholder="Codigo obra">
        <br><br>
        <input type="text" name="id" placeholder="Id Instrumento">
        <br><br>
        <input type="submit">
        <br><br>
        <a href="menu.html">Volver al menu</a>
    </form>

    <?php
    include_once 'funciones.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Codigo = $_POST['Codigo'];
        $id = $_POST['id'];
       
        $resultado = insertar_interp($conexion, $Codigo, $id );
    }
    ?>
</body>
</html>