<?php
require_once('../model/comprasModel.php');

//instancio la clase  ComprasModel

$objCompras = new ComprasModel();
$tipo  = $_REQUEST['tipo'];

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