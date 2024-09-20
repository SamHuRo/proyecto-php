<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/estudiantes.php');

$Modelo = new Usuario();
$Modelo->validateSession();

$ModeloEstudiantes = new Estudiante();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style_table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <header>
        <div class="menu">
            <?php
                $directorio_actual = getcwd();

                $directorio_padre = dirname($directorio_actual);
                $nombre_carpeta_padre = basename($directorio_padre);
            ?>

            <h1><?php echo $nombre_carpeta_padre;?></h1>
            <?php
            if($Modelo->getPerfil() == 'Administrador'){ ?>
            <nav>
                <ul>
                    <li><a class="navegador" href="../../Administradores/Vistas/index.php">Administradores</a></li>
                    <li><a class="navegador" href="../../Docentes/Vistas/index.php">Docentes</a></li>
                    <li><a class="navegador" href="../../Materias/Vistas/index.php">Materias</a></li>
                    <li><a class="navegador" href="../../Usuarios/Controladores/logout.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
            <?php
            }else{ ?>
            <nav>
                <ul>
                    <li><a class="navegador" href="../../Usuarios/Controladores/logout.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
            <?php                
            }
            ?>
            
            
        </div>
    </header> <br>

    <div class="conteiner">

        <div>
            <button><a href="add.php" target="_blank">Registrar Estudiante</a></button>
        </div> <br><br>
        
        <div class="tabla">
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
                    $Estudiantes = $ModeloEstudiantes->get();

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
        
    </div>

</body>
</html>