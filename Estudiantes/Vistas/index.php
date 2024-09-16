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
            <a href="../../Usuarios/Controladores/logout.php">Cerrar Sesión</a>
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
                    foreach($Estudiantes as $estudiante){ ?>
                        <tr>
                            <td><?php echo  $estudiante['ID_ESTUDIANTE'];?></td>
                            <td><?php echo  $estudiante['NOMBRE'];?></td>
                            <td><?php echo  $estudiante['APELLIDO'];?></td>
                            <td><?php echo  $estudiante['DOCUMENTO'];?></td>
                            <td><?php echo  $estudiante['CORREO'];?></td>
                            <td><?php echo  $estudiante['MATERIA'];?></td>
                            <td><?php echo  $estudiante['DOCENTE'];?></td>
                            <td><?php echo $estudiante['PROMEDIO'];?></td>
                            <td><?php echo  $estudiante['FECHA_REGISTRO'];?></td>
                            <td>
                                <a href='edit.php?Id=<?php echo  $estudiante['ID_ESTUDIANTE'];?>' target='_blank'>Editar</a>
                                <a href='delete.php?Id=<?php echo  $estudiante['ID_ESTUDIANTE'];?>' target='_blank'>Eliminar</a> 
                            </td>
                        </tr>
                    <?php }
                }?>
            </tbody>
        </table>
    </div>

</body>
</html>