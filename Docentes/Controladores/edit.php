<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/docentes.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

// Si se ha enviado un POST
if($_POST){
    //echo "Se envio formulario";
    
    $ModeloDocente = new Docente();

    $id = $_POST['Id'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];
    $estado = $_POST['Estado'];
    
    $ModeloDocente->update($id, $nombre, $apellido, $usuario, $password, $estado);
    
}else{
    header('Location: ../../Docentes/Vistas/add.php');
}

?>