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
    <h1>Editar Estudiante</h1>

    <form action="../Controladores/edit.php" method="post">
        <input type="hidden" name="Id" value="<?php echo $id;?>">

        <?php
        if($informacionEstudiante != null){
            foreach($informacionEstudiante as $estudiante){
        ?>

        Nombre <br>
        <input type="text" name="Nombre" require="" autocapitalize="off" placeholder="Nombre" value="<?php echo $estudiante['NOMBRE']?>"> <br><br>

        Apellido <br>
        <input type="text" name="Apellido" require="" autocapitalize="off" placeholder="Apellido" value="<?php echo $estudiante['APELLIDO']?>"> <br><br>

        Documento <br>
        <input type="text" name="Documento" require="" autocapitalize="off" placeholder="Documento" value="<?php echo $estudiante['DOCUMENTO']?>"> <br><br>

        Correo <br>
        <input type="email" name="Correo" require="" autocapitalize="off" placeholder="Correo" value="<?php echo $estudiante['CORREO']?>"> <br><br>

        Materia <br>
        <select name="Materia" require="">
            <option value="<?php echo $estudiante['MATERIA']?>"><?php echo $estudiante['MATERIA']?></option>
            <?php  
            $materias = $ModeloMetodos->getMaterias();

            if($materias != null){
                foreach($materias as $materia){ 
                    if($estudiante['MATERIA'] != $materia['MATERIA']){ ?>
                    <option value="<?php echo $materia['MATERIA']?>"><?php echo $materia['MATERIA']?></option>
            <?php
                    }
                }
            }
            ?>
        </select> <br><br>

        Docente <br>
        <select name="Docente" require="">
            <option><?php echo $estudiante['DOCENTE']?></option>
            <?php  
            $docentes = $ModeloMetodos->getDocente();

            if($docentes != null){
                foreach($docentes as $docente){ 
                   if($estudiante['DOCENTE'] != $docente['NOMBRE']){?>
                <option value="<?php echo $docente['NOMBRE'] . " " . $docente['APELLIDO']?>"><?php echo $docente['NOMBRE'] . " " . $docente['APELLIDO']?></option>
            <?php
                   }
                }
            }
            ?>
        </select> <br><br>

        Promedio <br>
        <input type="number" name="Promedio" require="" autocapitalize="off" placeholder="Promedio" value="<?php echo $estudiante['PROMEDIO']?>"> <br><br>

        
        <?php
                }
            }
        ?>
        <input type="submit" value="Editar Estudiante"> <br><br>
    </form>
</body>
</html>