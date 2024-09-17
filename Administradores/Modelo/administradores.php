<?php
require_once('../../conexion.php');

class Administradores extends Conexion{
    public function __construct(){
		$this->db = parent::__construct();
	}

    //Funcion para insertar
    public function add($Nombre, $Apellido, $Usuario, $Password){
        //Objeto de la sentencia de MySQL, el metodo prepare() prepara una sentencia para su ejecución y devuleve  un objeto
        $stament = $this->db->prepare("INSERT INTO usuarios (NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL, ESTADO) VALUES (:Nombre, :Apellido, :Usuario, :Password, 'Administrador', 'Activo')");

        //Asignar los valores a insertar
        $stament->bindParam(":Nombre", $Nombre);
        $stament->bindParam(":Apellido", $Apellido);
        $stament->bindParam(":Usuario", $Usuario);
        $stament->bindParam(":Password", $Password);

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
        $stament = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Administrador'");
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
        $stament = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Administrador' AND ID_USUARIO = :Id");
        $stament->bindParam(":Id", $Id);
        $stament->execute();
        //Uso de la función fetch() para recorrer la sentencia fila por fila
        while($result = $stament->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }

    //Funcion para actualizar
    public function update($Id, $Nombre, $Apellido, $Usuario, $Password, $Estado){
        //Objeto de la sentencia de MySQL, el metodo prepare() prepara una sentencia para su ejecución y devuleve  un objeto
        $stament = $this->db->prepare("UPDATE usuarios SET NOMBRE = :Nombre, APELLIDO = :Apellido, USUARIO = :Usuario, PASSWORD = :Password, PERFIL = 'Administrador', ESTADO = :Estado WHERE ID_USUARIO = :Id");

        //Asignar los valores a insertar
        $stament->bindParam(":Id", $Id);
        $stament->bindParam(":Nombre", $Nombre);
        $stament->bindParam(":Apellido", $Apellido);
        $stament->bindParam(":Usuario", $Usuario);
        $stament->bindParam(":Password", $Password);
        $stament->bindParam(":Estado", $Estado);

        //Ejecutar la sentencia con el metodo execute()
        if($stament->execute()){
            header('Location: ../Vistas/index.php');
        }else{
            header('Location: ../Vistas/edit.php');
        }
    }

    //Eliminar
    public function delete($Id){
        $stament = $this->db->prepare("DELETE FROM usuarios WHERE ID_USUARIO = :Id");
        $stament->bindParam(':Id', $Id);
        if($stament->execute()){
            header('Location: ../Vistas/index.php');
        }else{
            header('Location: ../Vistas/delete.php');
        }
    }
}
?>