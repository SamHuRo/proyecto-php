<?php
require_once('../Modelo/ususarios.php');
session_start();

if (session_status() == PHP_SESSION_ACTIVE) {
    // La sesión está activa
    $_SESSION['ID'] = null;
    $_SESSION['NOMBRE'] = null;
    $_SESSION['PERFIL'] = null;
    //Cerrar la sesión
    $modelo = new Usuario();
    $modelo->cerrarSesion();
} else {
    // La sesión no está activa
    echo "Sesión no activa";
}
?>
