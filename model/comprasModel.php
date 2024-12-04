<?php
require_once "../library/conexion.php";
class ComprasModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCompras(
        $id_producto,
        $cantidad,
        $precio,
        $trabajador

    ) {
        // Ejecutar un procedimiento almacenado y el procedimiento almacena los datos de una compra en la base de datos
        $sql = $this->conexion->query("CALL insertcompras
        ('{$id_producto}', '{$cantidad}', '{$precio}', '{$trabajador}')");
       
         if ($sql == false) {
            print_r(value: $this->conexion->error);
        }


        $sql = $sql->fetch_object();
        return $sql;
    }
    
    public function obtener_productos()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM producto");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
            
        }
        return $arrRespuesta;
    }
    public function obtener_compras()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT id, id_producto, cantidad, precio, id_trabajador
FROM compras");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    public function verCompra($id){
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
}