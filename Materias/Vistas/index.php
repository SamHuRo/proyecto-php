<?php
require_once('../../Usuarios/Modelo/ususarios.php');

session_start();

$Modelo = new Usuario();
$Modelo->validateSession();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Styles/style_table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
     
    <div class="conteiner">
        <div>
            <h1>Materias</h1>
        </div> <br><br>
        <div>
            <button><a href="add.php" target="_blank">Registrar Materia</a></button>
        </div>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <a href="edit.php" target="_blank">Editar</a>
                        <a href="delete.php" target="_blank">Eliminar</a> 
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>