<?php
require_once('../../conexion.php');

class Estudiante extends Conexion{
    public function __construct(){
		$this->db = parent::__construct();
	}

    //Funcion para insertar
    public function add($Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $Fecha){
        //Objeto de la sentencia de MySQL, el metodo prepare() prepara una sentencia para su ejecución y devuleve  un objeto
        $stament = $this->db->prepare("INSERT INTO estudiantes (NOMBRE, APELLIDO, DOCUMENTO, CORREO, MATERIA, DOCENTE, PROMEDIO, FECHA_REGISTRO) 
        VALUES (:Nombre, :Apellido, :Documento, :Correo, :Materia, :Docente, :Promedio, :Fecha)");

        //Asignar los valores a insertar
        $stament->bindParam(":Nombre", $Nombre);
        $stament->bindParam(":Apellido", $Apellido);
        $stament->bindParam(":Documento", $Documento);
        $stament->bindParam(":Correo", $Correo);
        $stament->bindParam(":Materia", $Materia);
        $stament->bindParam(":Docente", $Docente);
        $stament->bindParam(":Promedio", $Promedio);
        $stament->bindParam(":Fecha", $Fecha);

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
        $stament = $this->db->prepare("SELECT * FROM estudiantes");
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
        $stament = $this->db->prepare("SELECT * FROM estudiantes WHERE  ID_ESTUDIANTE = :Id");
        $stament->bindParam(":Id", $Id);
        $stament->execute();
        //Uso de la función fetch() para recorrer la sentencia fila por fila
        while($result = $stament->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }

    //Funcion para actualizar
    public function update($Id, $Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $Fecha){
        //Objeto de la sentencia de MySQL, el metodo prepare() prepara una sentencia para su ejecución y devuleve  un objeto
        $stament = $this->db->prepare("UPDATE estudiantes SET NOMBRE = :Nombre, APELLIDO = :Apellido, 
        DOCUMENTO = :Documento, CORREO = :Correo, MATERIA = :Materia, DOCENTE = :Docente, PROMEDIO = :Promedio, FECHA_REGISTRO = :Fecha WHERE ID_ESTUDIANTE = :Id");

        //Asignar los valores a insertar
        $stament->bindParam(":Id", $Id);
        $stament->bindParam(":Nombre", $Nombre);
        $stament->bindParam(":Apellido", $Apellido);
        $stament->bindParam(":Documento", $Documento);
        $stament->bindParam(":Correo", $Correo);
        $stament->bindParam(":Materia", $Materia);
        $stament->bindParam(":Docente", $Docente);
        $stament->bindParam(":Promedio", $Promedio);
        $stament->bindParam(":Fecha", $Fecha);


        //Ejecutar la sentencia con el metodo execute()
        if($stament->execute()){
            header('Location: ../Vistas/index.php');
        }else{
            header('Location: ../Vistas/edit.php');
        }
    }

    //Eliminar
    public function delete($Id){
        $stament = $this->db->prepare("DELETE FROM estudiantes WHERE ID_ESTUDIANTE = :Id");
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
        $stament = $this->db->prepare("SELECT * FROM estudiantes
        WHERE NOMBRE LIKE concat('%', :Search, '%') OR APELLIDO LIKE concat('%', :Search, '%') OR DOCUMENTO LIKE concat('%', :Search, '%') OR
        CORREO LIKE concat('%', :Search, '%') OR MATERIA LIKE concat('%', :Search, '%') OR DOCENTE LIKE concat('%', :Search, '%')");
        $stament->bindParam(':Search', $Search);
        $stament->execute();
        while($result = $stament->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }
}
?>