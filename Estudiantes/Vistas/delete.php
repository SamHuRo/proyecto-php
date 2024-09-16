<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../../metodos.php');
require_once('../Modelo/estudiantes.php');

$ModeloUsuario = new Usuario();
$ModeloUsuario->validateSession();

$ModeloMetodos = new Metodos();

//Obtener la Id del estudiante seleccionado
$id = $_GET['Id'];
//echo $id;
$Modelo = new Estudiante();
$informacionEstudiante = $Modelo->getById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Eliminar Estudiante</h1>

    <form action="../Controladores/delete.php" method="post">
        <input type="hidden" name="Id" value="<?php echo $id;?>">

        <p>¿Estás seguro de eliminar este Estudiante?</p>

        <input type="submit" value="Eliminar Estudiante"> <br><br>

    </form>
</body>
</html>