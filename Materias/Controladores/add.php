<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/materias.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

// Si se ha enviado un POST
if($_POST){
    //echo "Se envio formulario";
    
    $ModeloMateria = new Materia();

    $nombre = $_POST['Nombre'];
    
    $ModeloMateria->add($nombre);
    
}else{
    header('Location: ../../Docentes/Vistas/add.php');
}
?>