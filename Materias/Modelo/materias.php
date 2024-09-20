<?php
require_once('../../conexion.php');

class Materia extends Conexion{
    

    public function __construct(){
		$this->db = parent::__construct();
	}

    //Funcion para insertar
    public function add($Nombre){
        //Objeto de la sentencia de MySQL, el metodo prepare() prepara una sentencia para su ejecución y devuleve  un objeto
        $stament = $this->db->prepare("INSERT INTO materias (NOMBRE) 
        VALUES (:Nombre)");

        //Asignar los valores a insertar
        $stament->bindParam(":Nombre", $Nombre);

        //Ejecutar la sentencia con el metodo execute()
        if($stament->execute()){
            header('Location: ../Vistas/index.php');
        }else{
            header('Location: ../Vistas/add.php');
        }

    }

    //Traer toda la tabla
    public function get(){
        $rows = null;
        $stament = $this->db->prepare("SELECT * FROM `materias`");
        $stament->execute();
        //Uso de la función fetch() para recorrer la sentencia fila por fila
        while($result = $stament->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }

    //Solo una columnas
    public function getById($Id){
        $rows = null;
        $stament = $this->db->prepare("SELECT * FROM materias WHERE  ID_MATERIA = :Id");
        $stament->bindParam(":Id", $Id);
        $stament->execute();
        //Uso de la función fetch() para recorrer la sentencia fila por fila
        while($result = $stament->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }

    //Funcion para actualizar
    public function update($Id, $Nombre){
        //Objeto de la sentencia de MySQL, el metodo prepare() prepara una sentencia para su ejecución y devuleve  un objeto
        $stament = $this->db->prepare("UPDATE materias SET NOMBRE = :Nombre WHERE ID_MATERIA = :Id");

        //Asignar los valores a insertar
        $stament->bindParam(":Id", $Id);
        $stament->bindParam(":Nombre", $Nombre);


        //Ejecutar la sentencia con el metodo execute()
        if($stament->execute()){
            header('Location: ../Vistas/index.php');
        }else{
            header('Location: ../Vistas/edit.php');
        }
    }

    //Eliminar
    public function delete($Id){
        $stament = $this->db->prepare("DELETE FROM materias WHERE ID_MATERIA = :Id");
        $stament->bindParam(':Id', $Id);
        if($stament->execute()){
            header('Location: ../Vistas/index.php');
        }else{
            header('Location: ../Vistas/delete.php');
        }
    }

    //Search
    public function search($Search){
        $rows = null;
        $stament = $this->db->prepare("SELECT * FROM materias
        WHERE NOMBRE LIKE concat('%', :Search, '%') ");
        $stament->bindParam(':Search', $Search);
        $stament->execute();
        while($result = $stament->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }
}
?>