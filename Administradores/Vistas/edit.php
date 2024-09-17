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
    <link rel="stylesheet" href="../../Styles/style_table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
     
    <div class="conteiner">
        <div>
            <h1>Editar Administrador</h1>
        </div> <br><br>
        <div>
            <form action="../Controladores/edit.php" method="post">
                <input type="hidden" name="Id" value=""> <br><br>

                Nombre <br>
                <input type="text" name="Nombre" require="" autocapitalize="off" placeholder="Nombre"> <br><br>

                Apellido <br>
                <input type="text" name="Apellido" require="" autocapitalize="off" placeholder="Apellido"> <br><br>

                Usuario <br>
                <input type="text" name="Usuario" require="" autocapitalize="off" placeholder="Usuario"> <br><br>

                Password <br>
                <input type="password" name="Password" require="" autocapitalize="off" placeholder="Password"> <br><br>

                Estado <br>
                <select name="Estado" require="">
                    <option>Seleccione</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select><br><br>

                <input type="submit" value="Editar Administrador"> <br><br>
            </form>
        </div>
    </div>

</body>
</html>