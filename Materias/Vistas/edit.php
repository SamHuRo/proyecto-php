<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/materias.php');

$Modelo = new Usuario();
$Modelo->validateSession();

$ModeloMaterias = new Materia();

//Obtener el Id de la materia
$id = $_GET['Id'];
$informacionMateria = $ModeloMaterias->getById($id);
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
            <h1>Editar Materia</h1>
        </div> <br><br>
        <div>
            <form action="../Controladores/edit.php" method="post">
                <input type="hidden" name="Id" value="<?php echo $id;?>"> 
                <?php 
                    if($informacionMateria != null){
                        foreach($informacionMateria as $materia){?>
                            
                            
                            Nombre <br>
                            <input type="text" name="Nombre" require="" autocapitalize="off" placeholder="Nombre Materia" value="<?php echo $materia['MATERIA']?>"> <br><br>
                <?php
                        }
                    }
                ?>
                

                <input type="submit" value="Editar Materia"> <br><br>
            </form>
        </div>
    </div>

</body>
</html>