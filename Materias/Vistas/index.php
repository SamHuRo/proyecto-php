<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/materias.php');

$Modelo = new Usuario();
$Modelo->validateSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Estudiantes/style_table.css">
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
            <nav>
                <ul>
                    <li><a class="navegador" href="../../Administradores/Vistas/index.php">Administradores</a></li>
                    <li><a class="navegador" href="../../Estudiantes/Vistas/index.php">Estudiantes</a></li>
                    <li><a class="navegador" href="../../Docentes/Vistas/index.php">Docentes</a></li>
                    <li><a class="navegador" href="../../Usuarios/Controladores/logout.php">Cerrar Sesión</a></li>
                    <li><?php $Modelo->mostrarPerfil(); ?></li>   
                </ul>
            </nav>
        </div>
    </header> <br>
     
    <div class="conteiner">
        <div>
            <button><a href="add.php" target="_blank">Registrar Materia</a></button>
        </div> <br><br>
        
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $ModeloMaterias = new Materia();

                        $materias = $ModeloMaterias->get();

                        if($materias != null){
                            foreach($materias as $materia){ ?>
                        
                        <tr>
                            <td><?php echo $materia['ID_MATERIA'] ?></td>
                            <td><?php echo $materia['MATERIA'] ?></td>
                            <td>
                                <a href="edit.php?Id=<?php echo $materia['ID_MATERIA']?>" target="_blank">Editar</a>
                                <a href="delete.php?Id=<?php echo $materia['ID_MATERIA']?>" target="_blank">Eliminar</a> 
                            </td>
                        </tr>
                    <?php
                            }
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>