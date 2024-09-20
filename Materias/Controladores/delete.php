<?php

require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/docentes.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

if($_POST){
    //echo "Se envio formulario";
    
    $ModelMaterias = new Materia();

    $id = $_POST['Id'];
    $ModelMaterias->delete($id);

    // Supongamos que se ha realizado alguna acción exitosa
    echo "<h2>¡Operación realizada con éxito!</h2>";
    
}else{
    header('Location: ../../Materiales/Vistas/add.php');
}

?>