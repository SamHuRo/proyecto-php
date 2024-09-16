<?php
require_once('../Modelo/ususarios.php');
session_start();

if (session_status() == PHP_SESSION_ACTIVE) {
    // La sesión está activa
    echo "Sesión activa <br>";
    echo "Sesión con Id: " . $_SESSION['ID'] . ", Nombre: " . $_SESSION["NOMBRE"] . ", Perfil: " . $_SESSION['PERFIL'];
    //Cerrar la sesión
    $modelo = new Usuario();
    $modelo->cerrarSesion();
} else {
    // La sesión no está activa
    echo "Sesión no activa";
}
?>
