<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/docentes.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

// Si se ha enviado un POST
if($_POST){
    //echo "Se envio formulario";
    
    $ModeloDocentes = new Docente();

    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];
    
    $ModeloDocentes->add($nombre, $apellido, $usuario, $password);
    
}else{
    header('Location: ../../Docentes/Vistas/add.php');
}
?>