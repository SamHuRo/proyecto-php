<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/estudiantes.php');

$ModeloEstudiantes = new Usuario();
$ModeloEstudiantes->validateSession();

$Modelo = new Estudiante();
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
            <h1>Estudiantes</h1>
        </div> <br><br>

        <div>
            <button><a href="add.php" target="_blank">Registrar Estudiante</a></button>
        </div>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Materias</th>
                    <th>Docente</th>
                    <th>Promedio</th>
                    <th>Fecha de Registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $Estudiantes = $Modelo->get();

                if($Estudiantes!=null){
                    foreach($Estudiantes as $estudiante){
                        echo "<tr>
                                <td>" . $estudiante['ID_ESTUDIANTE'] . "</td>
                                <td>" . $estudiante['NOMBRE'] . "</td>
                                <td>" . $estudiante['APELLIDO'] . "</td>
                                <td>" . $estudiante['DOCUMENTO'] . "</td>
                                <td>" . $estudiante['CORREO'] . "</td>
                                <td>" . $estudiante['MATERIA'] . "</td>
                                <td>" . $estudiante['DOCENTE'] . "</td>
                                <td>" . $estudiante['PROMEDIO'] . "</td>
                                <td>" . $estudiante['FECHA_REGISTRO'] . "</td>
                                <td>
                                    <a href='edit.php' target='_blank'>Editar</a>
                                    <a href='delete.php' target='_blank'>Eliminar</a> 
                                </td>
                            </tr>";
                    }
                }
                ?>
                
            </tbody>
        </table>
    </div>

</body>
</html>