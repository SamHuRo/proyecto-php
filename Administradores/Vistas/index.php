<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/administradores.php');

$Modelo = new Usuario();
$Modelo->validateSession();

$ModeloAdministradores = new Administradores();
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
                        <li><a class="navegador" href="../../Estudiantes/Vistas/index.php">Estudiantes</a></li>
                        <li><a class="navegador" href="../../Docentes/Vistas/index.php">Docentes</a></li>
                        <li><a class="navegador" href="../../Materias/Vistas/index.php">Materias</a></li>
                        <li><a class="navegador" href="../../Usuarios/Controladores/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>
                
            </div>
    </header> <br>
    <div class="conteiner">

        <div>
            <button><a href="add.php" target="_blank">Registrar Administrador</a></button>
        </div>
        <br><br>
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $administradores = $ModeloAdministradores->get();
                        if($administradores != null){
                            foreach($administradores as $administrador){ ?>

                    <tr>
                        <td><?php echo $administrador['ID_USUARIO'] ?></td>
                        <td><?php echo $administrador['NOMBRE'] ?></td>
                        <td><?php echo $administrador['APELLIDO'] ?></td>
                        <td><?php echo $administrador['USUARIO'] ?></td>
                        <td><?php echo $administrador['PERFIL'] ?></td>
                        <td><?php echo $administrador['ESTADO'] ?></td>
                        <td>
                            <a href="edit.php?Id=<?php echo  $administrador['ID_USUARIO'];?>" target="_blank">Editar</a>
                            <a href="delete.php?Id=<?php echo  $administrador['ID_USUARIO'];?>" target="_blank">Eliminar</a> 
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