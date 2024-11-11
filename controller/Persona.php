
<?php 
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

// instancio de la clase modeloproducto
$objPersona = new PersonaModel();
if($tipo=="registrar"){
    // print_r($_POST);
    // echo $_FILES['imagen']['tmp_name'];

    if($_POST){
        $nro_identidad = $_POST['numero_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar contraseña
        $estado = $_POST['estado'];
        $fecha_reg = $_POST['fecha_reg'];
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || 
        $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || 
        $direccion == "" || $rol == "" || $password == "" || $estado == "" || $fecha_reg == "") {
          //respuesta
            $arr_Respuesta = array('status'=> false,
            'mensaje'=>'Error, campos vacios');
        } else{
            $objPersona = 
            $objPersona->registrarPersona($nro_identidad, $razon_social,
             $telefono, $correo, $departamento, $provincia,
              $distrito, $cod_postal, $direccion,$rol,$password,$estado,$fecha_reg);
              if ($objPersona->id>0) {
                $arr_Respuesta = array('status'=> true,
                'mensaje'=>'Registro exitoso');
             
             } else {
                $arr_Respuesta = array('status'=> false,
                'mensaje'=>'Error al registrar producto');
              }
              echo json_encode($arr_Respuesta);
        }
    }
}

?>
