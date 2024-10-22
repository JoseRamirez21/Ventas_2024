<?php
require_once "../library/conexion.php";
class ProductoModel{

    private $conexion;
    function __construct()
    {
        // this = esta
        $this->conexion = new conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$fecha_vencimiento,$imagen,$id_proveedor){
       $sql = $this->conexion->query("CALL insertar_producto('{$codigo}',
       '{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$fecha_vencimiento}',
       '{$imagen}','{$id_proveedor}')");
    }
}
?>

