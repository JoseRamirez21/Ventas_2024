<?php

require_once "../library/conexion.php";
class ProductoModel
{

    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarProducto(
        $codigo,
        $nombre,
        $detalle,
        $precio,
        $stock,
        $categoria,
        $fecha_v,
        $imagen,
        $proveedor,
        $tipo_archivo
    ) {
        // Ejecutar un procedimiento almacenado y el procedimiento almacena los datos de un nuevo producto en la base de datos
        $sql = $this->conexion->query("CALL insertproducto('{$codigo}',
            '{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}',
            '{$fecha_v}','{$imagen}','{$proveedor}','{$tipo_archivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function actualizar_imagen($id, $imagen)
    {
        $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' WHERE id='{$id}'");
        return 1;
    }


    public  function obtener_productos()
    {

        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM producto");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    public function obtener_producto_por_id($id)
    {
        $respuesta = $this->conexion->query("SELECT nombre FROM producto WHERE id = '{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }

    public function verProducto($id){
        $sql = $this->conexion->query("SELECT * FROM producto WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }



    public function actualizar_producto( $id, $nombre, $detalle, $precio,$categoria, $fecha_v,$proveedor) {
        // Ejecutar un procedimiento almacenado y el procedimiento almacena los datos de un nuevo producto en la base de datos
        $sql = $this->conexion->query("CALL actualizarproducto('{$id}',
        '{$nombre}','{$detalle}','{$precio}','{$categoria}',
        '{$fecha_v}','{$proveedor}')");
        $sql = $sql->fetch_object();
        return $sql;
    }


public function eliminarProducto($id){
    $sql = $this->conexion->query("CALL eliminarproducto('{$id}')");
    $sql = $sql->fetch_object();
    return $sql;
}

public function productoTieneCompras($id)
{
    $sql = $this->conexion->query("SELECT COUNT(*) as count FROM compras WHERE id_producto = '{$id}'");
    $resultado = $sql->fetch_object();
    return $resultado->count > 0;
}
    
    
    
    
}

