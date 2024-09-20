<?php
//Importar la clase conexzion
require_once('../../conexion.php');

class Usuario extends Conexion{
    public function __construct(){
		$this->db = parent::__construct();
	}

    public function login($usuario, $password){
        $stament = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :usuario AND PASSWORD = :password");
        $stament->bindParam(':usuario', $usuario);
        $stament->bindParam(':password', $password);
        $stament->execute(); //Ejecutar
        //Rectififcar si se encontro al usuario
        session_start();
        if($stament->rowCount() == 1){
            $result = $stament->fetch();
            //Crear las variables de session
            $_SESSION['NOMBRE'] = $result["NOMBRE"] . " " . $result["APELLIDO"];
            $_SESSION['ID'] = $result["ID_USUARIO"];
            $_SESSION['PERFIL'] = $result["PERFIL"];
            return true;
        }
        return false;
    }

    //Funciones para regrasar la información del usuario si este existe
    public function getNombre(){
        return $_SESSION['NOMBRE'];
    }

    public function getId(){
        return $_SESSION['ID'];
    }

    public function getPerfil(){
        return $_SESSION['PERFIL'];
    }

    //Validar la sesion del usuario
    public function validateSession(){
        session_start();
        if($_SESSION['ID'] == null){
            header('Location: ../../index.php'); //Redirigir al usuario al inicio
        }
    }

    //Validar si es un administrador
    public function validateSessionAdministrator(){

        if($_SESSION['ID'] != null){
            if($_SESSION['PERFIL'] == 'Administrador'){
                header('Location: ../../Administradores/Vistas/index.php');
            }
            else{
                header('Location: ../../index.php');
            }
        }
    }

    //Funcion para cerrar sesion
    public function cerrarSesion(){
        session_destroy();

        // Eliminar la cookie de sesión
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]);

        }
        // Redirigir al usuario a la página de inicio de sesión o a otra página
        header('Location: ../../index.php');
        exit;
    }

    //Funcion para imprimir el usuario
    public function perfil(){
        $nombre = $_SESSION['NOMBRE'];
        $perfil = $_SESSION['PERFIL'];

        echo "<h2>Usuario: " . $nombre . "- Perfil: " . $perfil . "</h2>";
    }
}

?>