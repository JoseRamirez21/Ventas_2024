
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

}



?>