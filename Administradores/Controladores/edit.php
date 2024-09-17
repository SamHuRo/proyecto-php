<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/administradores.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

// Si se ha enviado un POST
if($_POST){
    //echo "Se envio formulario";
    
    $ModeloAdministradores = new Administradores();

    $id = $_POST['Id'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $ususario = $_POST['Usuario'];
    $password = $_POST['Password'];
    $estado = $_POST['Estado'];
    
    $ModeloAdministradores->update($id, $nombre, $apellido, $ususario, $password, $estado);
    
}else{
    header('Location: ../../Administradores/Vistas/add.php');
}

?>