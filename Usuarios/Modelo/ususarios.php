<?php
//Importar la clase conexzion
require_once('../../conexion.php');

class Usuario extends Conexion{
    public function __construct(){
		$this->db = parent::__construct();
	}

    public function loginc($usuario, $password){
        $stament = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :usuario AND PASSWORD = :password");
        $stament->binParam(':usuario', $usuario);
        $stament->binParam(':password',$password);
        $stament->execute(); //Ejecutar
        //Rectififcar si se encontro al usuario
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
}

?>