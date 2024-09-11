<?php
require_once('../../Usuarios/Modelo/ususarios.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Editar Estudiante</h1>

    <form action="../Controladores/edit.php" method="post">
        <input type="hidden" name="Id" value=""> <br><br>

        Nombre <br>
        <input type="text" name="Nombre" require="" autocapitalize="off" placeholder="Nombre"> <br><br>

        Apellido <br>
        <input type="text" name="Apellido" require="" autocapitalize="off" placeholder="Apellido"> <br><br>

        Documento <br>
        <input type="text" name="Documento" require="" autocapitalize="off" placeholder="Documento"> <br><br>

        Correo <br>
        <input type="email" name="Correo" require="" autocapitalize="off" placeholder="Correo"> <br><br>

        Materia <br>
        <select name="Materia" require="">
            <option>Selecione</option>
            <?php  
            $materias = $ModeloMetodos->getMaterias();

            if($materias != null){
                foreach($materias as $materia){ ?>
                <option value="<?php echo $materia['MATERIA']?>"><?php echo $materia['MATERIA']?></option>
            <?php
                }
            }
            ?>
        </select> <br><br>

        Docente <br>
        <select name="Docente" require="">
            <option>Selecione</option>
            <?php  
            $docentes = $ModeloMetodos->getDocente();

            if($docentes != null){
                foreach($docentes as $docente){ ?>
                <option value="<?php echo $docente['NOMBRE']?>"><?php echo $docente['NOMBRE'] . " " . $docente['APELLIDO']?></option>
            <?php
                }
            }
            ?>
        </select> <br><br>

        Promedio <br>
        <input type="number" name="Promedio" require="" autocapitalize="off" placeholder="Promedio"> <br><br>

        <input type="submit" value="Editar Estudiante"> <br><br>

    </form>
</body>
</html>