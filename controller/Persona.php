
<?php 
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

// instancio de la clase PersonaModel
$objPersona = new PersonaModel();
if($tipo=="registrar"){
    
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
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Esto es para poder encriptar las contraseñas
         $secure_password = password_hash($nro_identidad, PASSWORD_DEFAULT);


        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || 
        $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || 
        $direccion == "" || $rol == "" || $secure_password == "") {
          //respuesta
            $arr_Respuesta = array('status'=> false,
            'mensaje'=>'Error, campos vacios');
        } else{
            $objPersona = 
            $objPersona->registrarPersona($nro_identidad, $razon_social,
             $telefono, $correo, $departamento, $provincia,
              $distrito, $cod_postal, $direccion,$rol,$secure_password);
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
