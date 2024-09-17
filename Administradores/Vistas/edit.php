<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../../metodos.php');
require_once('../Modelo/administradores.php');

$ModeloUsuario = new Usuario();
$ModeloUsuario->validateSession();

$ModeloMetodos = new Metodos();

//Obtener la Id del estudiante seleccionado
$id = $_GET['Id'];
//echo $id;
$Modelo = new Administradores();
$informacionAdministrador = $Modelo->getById($id);
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
                <input type="hidden" name="Id" value="<?php echo $id;?>"> 

                <?php
                if($informacionAdministrador != null){
                    foreach($informacionAdministrador as $administrador){
                ?>

                Nombre <br>
                <input type="text" name="Nombre" require="" autocapitalize="off" placeholder="Nombre" value="<?php echo $administrador['NOMBRE']?>"> <br><br>

                Apellido <br>
                <input type="text" name="Apellido" require="" autocapitalize="off" placeholder="Apellido" value="<?php echo $administrador['APELLIDO']?>"> <br><br>

                Usuario <br>
                <input type="text" name="Usuario" require="" autocapitalize="off" placeholder="Usuario" value="<?php echo $administrador['USUARIO']?>"> <br><br>

                Password <br>
                <input type="password" name="Password" require="" autocapitalize="off" placeholder="Password" value="<?php echo $administrador['PASSWORD']?>"> <br><br>

                Estado <br>
                <select name="Estado" require="" value="<?php echo $administrador['ESTADO']?>">
                    <option>Seleccione</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select><br><br>
                <?php
                    }
                }
                ?>

                <input type="submit" value="Editar Administrador"> <br><br>
            </form>
        </div>
    </div>

</body>
</html>