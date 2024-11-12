<?php 

require_once "../library/conexion.php"; 

class proveedorModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this-> conexion = $this->conexion->connect();
    }
     // Ejecuta una consulta SQL para seleccionar todos los registros de la tabla 'persona' donde el rol es 'proveedor'
    public function obtener_proveedores(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'proveedor'");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
    
}

?>