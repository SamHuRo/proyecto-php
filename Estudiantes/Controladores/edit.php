<?php
require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/estudiantes.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

echo "HOla edit.php";

?>