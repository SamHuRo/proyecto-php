<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../../metodos.php');
require_once('../Modelo/docentes.php');

$ModeloUsuario = new Usuario();
$ModeloUsuario->validateSession();

$ModeloMetodos = new Metodos();

//Obtener la Id del estudiante seleccionado
$id = $_GET['Id'];

$Modelo = new Docente();
$informacionDocentes = $Modelo->getById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Eliminar Docente</h1>

    <form action="../Controladores/delete.php" method="post">
        <input type="hidden" name="Id" value="<?php echo $id;?>"> <br>

        <p>¿Estás seguro de eliminar este Docente?</p>

        <input type="submit" value="Eliminar Docente"> <br><br>

    </form>
</body>
</html>