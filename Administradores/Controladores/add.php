<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/administradores.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

// Si se ha enviado un POST
if($_POST){
    //echo "Se envio formulario";
    
    $ModeloAdministadores = new Administradores();

    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];
    
    $ModeloAdministadores->add($nombre, $apellido, $usuario, $password);
    
}else{
    header('Location: ../../Administradores/Vistas/add.php');
}

?>