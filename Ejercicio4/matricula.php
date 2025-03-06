<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">  
        <label> DNI del Usuario a matricular</label>
        <br>
        <br>
        <input type="text" name="DNI">
        <br><br>
        <label>ID de la asignatura a matricular</label>
        <br>
        <br>
        <input type="radio" name="Codigo" value="1"> IAW
        <br><br>
        <input type="radio" name="Codigo" value="2"> SGBD
        <br><br>
        <input type="radio" name="Codigo" value="3"> SAD
        <br><br>
        <input type="radio" name="Codigo" value="4"> EIE
        <br><br>
        <input type="radio" name="Codigo" value="5"> SR1
        <br><br>
        <input type="radio" name="Codigo" value="6"> ASOR
        <br><br>
        <input type="submit">
        <br><br>
        <a href="menu.html">Volver al menu</a>

    </form>

    <?php
    include_once 'funciones.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $DNI = $_POST['DNI'];
        $Codigo = $_POST['Codigo'];

        $resultado = matricula_select($conexion, $DNI, $Codigo);

 }        
    ?>
</body>
</html>
