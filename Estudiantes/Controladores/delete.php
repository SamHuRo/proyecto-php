<?php

require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/estudiantes.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

if($_POST){
    //echo "Se envio formulario";
    
    $ModeloEstudiantes = new Estudiante();

    $id = $_POST['Id'];
    $ModeloEstudiantes->delete($id);
    
}else{
    header('Location: ../../Estudiantes/Vistas/add.php');
}

?>