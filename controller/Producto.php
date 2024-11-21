<?php 
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

// instancio de la clase modeloproducto
$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();
// $tipo = $_REQUEST['tipo'];

if ($tipo == "listar") {
    //respuesta 
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Producto = $objProducto->obtener_productos();
    // $arr_Categoria = $objCategoria->obtener_categorias();
    // $arr_Persona = $objPersona->obtener_productos();
    if (!empty($arr_Producto)) {
        // recorremos el array para agregar las ociones de la categoria
        for ($i = 0; $i < count($arr_Producto); $i++) {
          
          $id_categoria= $arr_Producto[$i]->id_categoria;
          $r_categoria = $objCategoria->obtener_categoria($id_categoria);
          $arr_Producto[$i]->categoria=$r_categoria;


          $id_proveedor= $arr_Producto[$i]->id_proveedor;
          $r_proveedor = $objPersona->obtener_persona($id_proveedor);
          $arr_Producto[$i]->proveedor=$r_proveedor;

            $id_producto = $arr_Producto[$i]->id;
            $nombre = $arr_Producto[$i]->nombre;
            $opciones = '<button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>';
             $arr_Producto[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Producto;

    }

    echo json_encode($arr_Respuesta);
    
}


if($tipo=="registrar"){
    // print_r($_POST);
    // echo $_FILES['imagen']['tmp_name'];

    if($_POST){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $fecha_v = $_POST['fecha_v'];
        $imagen = 'imagen';
        $proveedor = $_POST['proveedor'];
        if ($codigo=="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" 
        || $fecha_v=="" || $imagen=="" || $proveedor=="") {
          //respuesta
            $arr_Respuesta = array('status'=> false,
            'mensaje'=>'Error, campos vacios');
        } else{
            $arrProducto = 
            $objProducto->registrarProducto($codigo, $nombre,
             $detalle, $precio, $stock, $categoria,
              $fecha_v, $imagen, $proveedor);
              if ($arrProducto->id>0) {
                $arr_Respuesta = array('status'=> true,
                'mensaje'=>'Registro exitoso');
                // Cargar archivos
    $archivo = $_FILES['imagen']['tmp_name'];
    $destino = './assets/img_productos/';
    $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));

    $nombre = $arrProducto->id.".".$tipoArchivo;
                if (move_uploaded_file($archivo,$destino,$nombre)) {
                  $arr_imagen = $objProducto->actualizar_imagen($id,$nombre);
                }else{
                  $arr_Respuesta = array('status'=> true,
                'mensaje'=>'Registro exitoso, error al subir la imagen');
                }
                
             } else {
                $arr_Respuesta = array('status'=> false,
                'mensaje'=>'Error al registrar producto');
              }
              echo json_encode($arr_Respuesta);
        }
    }
}

if($tipo=="listar"){

}


?>

