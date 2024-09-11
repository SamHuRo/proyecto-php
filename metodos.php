<?php
require_once('conexion.php');

class Metodos extends Conexion{

    public function __construct(){
		$this->db = parent::__construct();
	}

    //Traer toda la tabla
    public function getMaterias(){
        $rows = null;
        $stament = $this->db->prepare("SELECT * FROM materias");
        $stament->execute();
        //Uso de la función fetch() para recorrer la sentencia fila por fila
        while($result = $stament->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }

    public function getDocente(){
        $rows = null;
        $stament = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Docente'");
        $stament->execute();
        //Uso de la función fetch() para recorrer la sentencia fila por fila
        while($result = $stament->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }
}
?>