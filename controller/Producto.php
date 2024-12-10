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

      $id_categoria = $arr_Producto[$i]->id_categoria;
      $r_categoria = $objCategoria->obtener_categoria($id_categoria);
      $arr_Producto[$i]->categoria = $r_categoria;


      $id_proveedor = $arr_Producto[$i]->id_proveedor;
      $r_proveedor = $objPersona->obtener_persona($id_proveedor);
      $arr_Producto[$i]->proveedor = $r_proveedor;

      $id_producto = $arr_Producto[$i]->id;
      $nombre = $arr_Producto[$i]->nombre;
      // //localhost/editar-producto/4                                                             
     $opciones = '<a href=" ' . BASE_URL . 'editar-producto/' . $id_producto . '"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
<button class="btn btn-danger btn-sm" onclick="eliminar_producto(' . $id_producto . ');">
    <i class="fas fa-trash-alt"></i>
</button>';  //eliminar_producto(va llamar al id);
      $arr_Producto[$i]->options = $opciones;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Producto;
  }

  echo json_encode($arr_Respuesta);
}


if ($tipo == "registrar") {
  // print_r($_POST);
  // echo $_FILES['imagen']['tmp_name'];

  if ($_POST) {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $fecha_v = $_POST['fecha_v'];
    $imagen = 'imagen';
    $proveedor = $_POST['proveedor'];
    if (
      $codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $categoria == ""
      || $fecha_v == "" || $imagen == "" || $proveedor == ""
    ) {
      //respuesta
      $arr_Respuesta = array(
        'status' => false,
        'mensaje' => 'Error, campos vacios'
      );
    } else {


      //cargar archivos
      $archivo = $_FILES['imagen']['tmp_name'];
      $destino = '../assets/img_productos/';
      $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));


      $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $fecha_v, $imagen, $proveedor, $tipoArchivo);
      if ($arrProducto->id_n > 0) {
        $arr_Respuesta = array(
          'status' => true,
          'mensaje' => 'Registro exitoso'
);
        $nombre = $arrProducto->id_n . "." . $tipoArchivo;
        if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
        } else {
          $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso, error al subir la imagen');
        }
      } else {
        $arr_Respuesta = array(
          'status' => false,
          'mensaje' => 'Error al registrar producto'
        );
      }
      echo json_encode($arr_Respuesta);
    }
  }
}

if ($tipo == "ver") {
  // print_r($_POST);
  $id_producto = $_POST['id_producto'];
  $arr_Respuesta = $objProducto->verProducto($id_producto);
  // print_r($arr_Respuesta);eso es para hacer la prueba 
  if (empty($arr_Respuesta)) {
    $response = array('status' => false, 'mensaje' => "Error, No hay informacion");
  } else {
    $response = array('status' => true, 'mensaje' => "Datos Encontrados", 'contenido' => $arr_Respuesta);
  }
  echo json_encode($response);
}



//actualizar producto

if ($tipo == "actualizar") {
  if ($_POST) {
      $id = $_POST['id_producto'];
      $imagen = $_POST['img']; // Imagen anterior
      $nombre = $_POST['nombre'];
      $detalle = $_POST['detalle'];
      $precio = $_POST['precio'];
      $categoria = $_POST['categoria'];
      $fecha_v = $_POST['fecha_v'];
      $proveedor = $_POST['proveedor'];

      if ($nombre == "" || $detalle == "" || $precio == "" || $categoria == "" || $fecha_v == "" || $proveedor == "") {
          $arr_Respuesta = array(
              'status' => false,
              'mensaje' => 'Error, campos vacíos'
          );
      } else {
          $arrProducto = $objProducto->actualizar_producto($id, $nombre, $detalle, $precio, $categoria, $fecha_v, $proveedor);

          if ($arrProducto->p_id > 0) { // Producto actualizado correctamente
              $arr_Respuesta = array(
                  'status' => true,
                  'mensaje' => 'Actualizado Correctamente'
              );

              if ($_FILES['imagen']['tmp_name'] != "") {
                  $rutaBase = '../assets/img_productos/';
                  
                  // Eliminar todas las imágenes anteriores asociadas al producto
                  $archivos = glob($rutaBase . $id . '.*'); // Buscar archivos con el mismo nombre base
                  foreach ($archivos as $archivo) {
                      if (is_file($archivo)) {
                          unlink($archivo); // Eliminar archivo
                      }
                  }

                  // Subir nueva imagen
                  $archivo = $_FILES['imagen']['tmp_name'];
                  $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
                  $destino = $rutaBase . $id . '.' . $tipoArchivo;

                  // Validar tipos de archivo permitidos
                  $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                  if (in_array($tipoArchivo, $tiposPermitidos)) {
                      if (move_uploaded_file($archivo, $destino)) {
                          error_log("Imagen actualizada correctamente: $destino");
                      } else {
                          error_log("Error: No se pudo subir la imagen: $destino");
                      }
                  } else {
                      error_log("Error: Tipo de archivo no permitido: $tipoArchivo");
                  }
              }
          } else {
              $arr_Respuesta = array(
                  'status' => false,
                  'mensaje' => 'Error al Actualizar Producto'
              );
          }
      }
      echo json_encode($arr_Respuesta);
  }
}



if ($tipo == "eliminar") {
  // print_r($_POST);
  $id_producto = $_POST['id_producto'];
  $arr_Respuesta = $objProducto->eliminarProducto($id_producto);
  // print_r($arr_Respuesta);eso es para hacer la prueba 
  if (empty($arr_Respuesta)) {
    $response = array('status' => false);
  } else {
    $response = array('status' => true,);
  }
  echo json_encode($response);
}




