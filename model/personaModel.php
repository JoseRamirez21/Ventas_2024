
<?php

require_once "../library/conexion.php";
class PersonaModel
{

    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona(
        $nro_identidad,
        $razon_social,
        $telefono,
        $correo,
        $departamento,
        $provincia,
        $distrito,
        $cod_postal,
        $direccion,
        $rol,
        $password
    ) {
        // Ejecutar un procedimiento almacenado y el procedimiento almacena los datos de una persona en la base de datos
        $sql = $this->conexion->query("CALL insertpersona(
            '{$nro_identidad}', '{$razon_social}', '{$telefono}', 
            '{$correo}', '{$departamento}', '{$provincia}', 
            '{$distrito}', '{$cod_postal}', '{$direccion}', 
            '{$rol}', '{$password}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function buscarPersonaPorDNI($nro_identidad)
    {
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtener_personas()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM persona");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function obtener_trabajadores()
    {
        $arrRespuesta = array();
        // Consulta a la tabla persona de la BD para obtener los trabajadores
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'trabajador'");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }

        return $arrRespuesta;
    }

    public function obtener_proveedores()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'proveedor'");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    public function obtener_persona($id){
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE id='{$id}'");
        $respuesta = $respuesta->fetch_object();
        return $respuesta;
    }

    public function obtener_proveedor_por_id($id)
    {
        $respuesta = $this->conexion->query("SELECT razon_social FROM persona WHERE id = '{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    public function obtener_trabajador_por_id($id)
{
    $respuesta = $this->conexion->query("SELECT razon_social FROM persona WHERE id = '{$id}'");
    return $respuesta->fetch_object();
}
public function verPersona($id) {
    $sql = $this->conexion->query("SELECT * FROM persona WHERE id='{$id}'");
    $sql = $sql->fetch_object();
    return $sql;
}

public function actualizar_persona($id, $nro_identidad, $razon_social, $telefono, $correo,$departamento,$direccion,$rol) {
    // Ejecutar un procedimiento almacenado y el procedimiento almacena los datos de un nuevo producto en la base de datos
    $sql = $this->conexion->query("CALL actualizarpersona('{$id}',
    '{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$direccion}','{$rol}'
    )");
    $sql = $sql->fetch_object();
    return $sql;
}

public function eliminarPersona($id){
    $sql = $this->conexion->query("CALL eliminarpersona('{$id}')");
    $sql = $sql->fetch_object();
    return $sql;
}

// public function categoriaTieneDependencias($id) {
//     // Cambia 'id' por la columna correcta que referencia a la tabla 'persona'
//     $sql = $this->conexion->query("SELECT COUNT(*) as count FROM compras WHERE id_trabajador = '{$id}'");
//     $resultado = $sql->fetch_object();

//     return $resultado->count > 0; // Devuelve true si hay dependencias
// }
// }
public function personaTieneAsociaciones($id)
{
    $sql = $this->conexion->query("SELECT COUNT(*) as count FROM compras WHERE id_trabajador = '{$id}'");
    $resultado = $sql->fetch_object();
    if ($resultado->count > 0) {
        return true;
    }

    $sql = $this->conexion->query("SELECT COUNT(*) as count FROM producto WHERE id_proveedor = '{$id}'");
    $resultado = $sql->fetch_object();
    return $resultado->count > 0;
}


}

?>