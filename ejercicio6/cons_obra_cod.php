<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="id" placeholder="Codigo del instrumento">
        <br><br>
        <input type="submit">
        <br><br>
        <a href="menu.html">Volver al menu</a>
    </form>

    <?php
    include_once 'funciones.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];

       $resultado = cons_obra_cod($conexion, $id );
    }
?>
</body>
</html>