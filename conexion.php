<?php 
//Clase para realizar la conexion a la base de datos
class Conexion {
    protected $db;
    private $driver = "mysql";
    private $host = "localhost"; //El lugar donde se ejecutará la conexión
    private $dbname = "proyecto"; //Especificar el nombre de la base de datos
    private $usuario = "root"; //El usuario de conexión de la base de datos
    private $contrasena = ""; //La contraseña de conexión a la base de datos

    public function __construct() {
        try {
        //Crear una instancia de la clase PDO
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}", $this->usuario, $this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Maneja los errores en forma de excepciones
            return $db;
        } catch (PDOException $e) {
            echo "Ha surgido algún error: Detalle: " . $e->getMessage();
        }
    }
}

?>