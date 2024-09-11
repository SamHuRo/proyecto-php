<?php
require_once('../Modelo/ususarios.php');

//Verificar si hay peticion POST
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //echo "Funiona el metodo POST";

    // Si se ha enviado un POST
    if(!empty($_POST)){
        //echo "El formulario contine datos";
        // El formulario ha sido enviado y contiene datos
        //Retomar los valores del login 
        $usuario = $_POST['Usuario'];
        $password = $_POST['Contrasena'];
    
        $Modelo = new Usuario();
        if($Modelo->login($usuario, $password)){
            //echo "Existe usuario";
            header('Location: ../../Estudiantes/Vistas/index.php');
        }else{
            header('Location: ../../index.php');
        }
    
    }else{
        /*
        // El formulario ha sido enviado pero no contiene datos
        header('Location: ../../index.php');*/
    }
}else{
    //echo "No funiona el metodo POST";

    // No se ha enviado un POST
    header('Location: ../../index.php');
}


?>