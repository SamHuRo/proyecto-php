<?php

//Retomar los valores del login 
$usuario = $_POST['Usuario'];
$password = $_POST['Contrasena'];

require_once('../Modelo/ususarios.php');

$Usuario = new Usuario();
$Usuario->login($usuario, $password);

//Validar session
$Usuario->validateSession();
//Redirigir a su respectiva vista
$Usuario->validateSessionAdministrator();

?>