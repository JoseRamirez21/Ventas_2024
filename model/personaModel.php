
<?php 

require_once "../library/conexion.php"; 
class PersonaModel{

    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this-> conexion = $this->conexion->connect();
    }

    public function registrarPersona(
        $nro_identidad, $razon_social, $telefono, 
        $correo, $departamento, $provincia,
        $distrito, $cod_postal, $direccion, 
        $rol, $password, $estado, $fecha_reg
    ){
        $sql = $this->conexion->query("CALL insertpersona(
            '{$nro_identidad}', '{$razon_social}', '{$telefono}', 
            '{$correo}', '{$departamento}', '{$provincia}', 
            '{$distrito}', '{$cod_postal}', '{$direccion}', 
            '{$rol}', '{$password}', '{$estado}', '{$fecha_reg}')");
            $sql = $sql->fetch_object();
            return $sql;
    }
   
    }
 
?>