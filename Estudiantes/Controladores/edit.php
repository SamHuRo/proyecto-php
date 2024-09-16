<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/estudiantes.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

// Si se ha enviado un POST
if($_POST){
    //echo "Se envio formulario";
    
    $ModeloEstudiantes = new Estudiante();

    $id = $_POST['Id'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $documento = $_POST['Documento'];
    $correo = $_POST['Correo'];
    $materia = $_POST['Materia'];
    $docente = $_POST['Docente'];
    $promedio = $_POST['Promedio'];
    $timestamp = time();
    // Formatear la fecha en el formato "Día de la semana, dd de Mes de yyyy"
    $fecha_formateada = date("Y-m-d", $timestamp);
    
    $ModeloEstudiantes->update($id, $nombre, $apellido, $documento, $correo, $materia, $docente, $promedio, $fecha_formateada);
    
}else{
    header('Location: ../../Estudiantes/Vistas/add.php');
}

?>