<?php
require_once('../model/comprasModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');
//instancio la clase  ComprasModel

$objCompras = new ComprasModel();
$objProducto = new ProductoModel();
$objPersona = new PersonaModel();

$tipo  = $_REQUEST['tipo'];


if ($tipo == "listar") {
    //respuesta 
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Compras = $objCompras->obtener_compras();
    if (!empty($arr_Compras)) {
 
       for ($i = 0; $i < count($arr_Compras); $i++) {
 
          // Obtener producto
          $id_producto = $arr_Compras[$i]->id_producto;
          $r_producto = $objProducto->obtener_producto_por_id($id_producto);
          $arr_Compras[$i]->producto = $r_producto;
 
          // Obtener trabajador
          $id_trabajador = $arr_Compras[$i]->id_trabajador;
          $r_trabajador = $objPersona->obtener_trabajador_por_id($id_trabajador);
          $arr_Compras[$i]->trabajador = $r_trabajador;
 
          $id_Compras = $arr_Compras[$i]->id;
         
          $opciones ='<a href=" '.BASE_URL.'editar-compra/'.$id_Compras.'"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"  onclick="eliminar_compra('.$id_Compras.');"></i></button>';  //eliminar_categoria(va llamar al id);
          $arr_Compras[$i]->options = $opciones;
       }
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arr_Compras;
    }
 
    echo json_encode($arr_Respuesta);
 }

if ($tipo == "registrar") {

    if ($_POST) {
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio']; 
        $trabajador = $_POST['trabajador'];
        if (
            $id_producto == "" || $cantidad == "" || $precio == "" || $trabajador == ""
        ) {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
        } else {
            $arrProducto = $objCompras->registrarCompras(
                $id_producto,
                $cantidad,
                $precio,
                $trabajador
            );
            if ($arrProducto->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Producto registrado con exito');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if ($tipo == "ver") {
    // Verifica si se ha recibido el ID de la compra
    $id_compra = $_POST['id_compra'] ;

    if ($id_compra) {
        // Llama al método del modelo para obtener la compra
        $arr_Respuesta = $objCompras->verCompra($id_compra);

        // Comprueba si se obtuvo información
        if (empty($arr_Respuesta)) {
            $response = array('status' => false, 'mensaje' => "Error, No hay información");
        } else {
            $response = array('status' => true, 'mensaje' => "Datos Encontrados", 'contenido' => $arr_Respuesta);
        }
    } else {
        $response = array('status' => false, 'mensaje' => "Error, ID de compra no proporcionado");
    }

    echo json_encode($response);
}


if ($tipo == "actualizar") {
    if ($_POST) {
    // Obtener los datos del formulario
    $id = $_POST['id_compra'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id_trabajador = $_POST['trabajador'];

    if ($id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {
        $arr_Respuesta = array(
            'status' => false,
            'mensaje' => 'Error, campos vacíos'
        );
    } else {
        $arr_Compras = $objCompras->actualizar_Compra($id, $id_producto, $cantidad, $precio, $id_trabajador);

        if ($arr_Compras->p_id > 0) { // compra actualizado correctamente
            $arr_Respuesta = array( 'status' => true,'mensaje' => 'Actualizado Correctamente'
            );
        
        } else {
            $arr_Respuesta = array(  'status' => false,  'mensaje' => 'Error al Actualizar Compra'
            );
        }
    }
    echo json_encode($arr_Respuesta);
}
}


// if ($tipo == "eliminar") {
//     // print_r($_POST);
//     $id_compra = $_POST['id_compra'];
//     $arr_Respuesta = $objCompras->eliminarCompra($id_compra);
//     // print_r($arr_Respuesta);eso es para hacer la prueba 
//     if (empty($arr_Respuesta)) {
//       $response = array('status' => false );
//     } else {
//       $response = array('status' => true,);
//     }
//     echo json_encode($response);
//   }

  if ($tipo == "eliminar") {
    if ($_POST) {
        $id_compra = $_POST['id_compra'];

        // Verificar si la categoría tiene productos asociados
        if ($objCompras->categoriaTieneDependencia($id_compra)) {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'No se puede eliminar la categoría porque tiene productos asociados');
        } else {
            $arr_Compras = $objCompras->eliminarCompra($id_compra);

            if ($arr_Compras) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Eliminación Exitosa');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, inténtelo de nuevo tiene productos asociados');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}