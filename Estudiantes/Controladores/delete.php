<?php

require_once('../../Usuarios/Modelo/ususarios.php');
require_once('../Modelo/estudiantes.php');

$verificarSesion = new Usuario();
$verificarSesion->validateSession();

if($_POST){
    //echo "Se envio formulario";
    
    $ModeloEstudiantes = new Estudiante();

    $id = $_POST['Id'];
    $ModeloEstudiantes->delete($id);

    // Supongamos que se ha realizado alguna acción exitosa
    echo "<h2>¡Operación realizada con éxito!</h2>";

    // Redirigir a otra página después de 3 segundos
    echo "<script>
    setTimeout(function(){
        window.location.href = 'index.php';
    }, 3000);
    </script>";
    
}else{
    header('Location: ../../Estudiantes/Vistas/add.php');
}

?>