<?php

require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/administradores.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

if($_POST){
    //echo "Se envio formulario";
    
    $ModeloAdministadores = new Administradores();

    $id = $_POST['Id'];
    $ModeloAdministadores->delete($id);

    // Supongamos que se ha realizado alguna acción exitosa
    echo "<h2>¡Operación realizada con éxito!</h2>";

    // Redirigir a otra página después de 3 segundos
    echo "<script>
    setTimeout(function(){
        window.location.href = 'index.php';
    }, 3000);
    </script>";
    
}else{
    header('Location: ../../Administradores/Vistas/add.php');
}

?>