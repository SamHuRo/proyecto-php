<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/estudiantes.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

// Si se ha enviado un POST
if($_POST){
    //echo "Se envio formulario";
    
    $ModeloEstudiantes = new Estudiante();

    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $documento = $_POST['Documento'];
    $correo = $_POST['Correo'];
    $materia = $_POST['Materia'];
    $docente = $_POST['Docente'];
    $promedio = $_POST['Promedio'];
    $fecha = date('Y-m-d');
    
    $ModeloEstudiantes->add($nombre, $apellido, $documento, $correo, $materia, $docente, $promedio, $fecha);
    
}else{
    header('Location: ../../Estudiantes/Vistas/add.php');
}

?>