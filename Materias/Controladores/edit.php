<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/materias.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

// Si se ha enviado un POST
if($_POST){
    $ModeloMateria = new Materia();

    $id = $_POST['Id'];
    $nombre = $_POST['Nombre'];
    
    $ModeloMateria->update($id, $nombre);
    
}else{
    header('Location: ../../Materias/Vistas/add.php');
}

?>