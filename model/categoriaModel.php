<?php 

require_once "../library/conexion.php"; 

class categoriaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this-> conexion = $this->conexion->connect();
    }
    public function obtener_categorias(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }


public function registrarCategoria(
    $nombre,$detalle,
){
        $sql = $this->conexion->query("CALL insertcategoria(
        '{$nombre}','{$detalle}')");
        $sql = $sql->fetch_object();
        return $sql;
}
public function obtener_categoria($id){
    $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE id='{$id}'");
    $respuesta = $respuesta->fetch_object();
    return $respuesta;
}

public function verCategoria($id) {
    $sql = $this->conexion->query("SELECT * FROM categoria WHERE id='{$id}'");
    $sql = $sql->fetch_object();
    return $sql;
}

public function actualizarCategoria($id, $nombre, $detalle) {
        $sqli = $this->conexion->query ("CALL actualizarcategoria('{$id}', '{$nombre}', '{$detalle}')");
        $sql = $sqli->fetch_object();
        return $sql;
}
public function eliminarCategoria($id){
    $sql = $this->conexion->query("CALL eliminarcategoria('{$id}')");
    $sql = $sql->fetch_object();
    return $sql;
}
public function categoriaTieneProducto($id)
{
    $sql = $this->conexion->query("SELECT COUNT(*) as count FROM producto WHERE id_categoria = '{$id}'");
    $resultado = $sql->fetch_object();
    return $resultado->count > 0;
}

}

?>