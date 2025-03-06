<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="obra" placeholder="Nombre obra" required>
        <br><br>
        <input type="text" name="autor" placeholder="Nombre autor"  required>
        <br><br>
        <input type="number" name="ano" placeholder="ano"  required>
        <br><br>
        <input type="submit">
        <br><br>
        <a href="menu.html">Volver al menu</a>
    </form>

    <?php
    include_once 'funciones.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $obra = $_POST['obra'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];
    
        $resultado = select_obra($conexion, $obra, $autor, $ano); 
    }


    ?>
</body>
</html>