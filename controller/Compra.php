<?php
require_once('../model/ComprasModel.php');

$tipo = $_REQUEST['tipo'];
$objCompras = new ComprasModel();

if ($tipo == "registrar") {
    if ($_POST) {
        // Captura de datos del formulario
        $id_proveedor = $_POST['id_proveedor'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $id_proveedor = $_POST['id_trabajador'];
        // Validación de campos (puedes personalizar esto según tus necesidades)
        if (empty($id_proveedor) || empty($cantidad) || empty($precio) ||empty($id_trabajador) ) {
            echo json_encode(['status' => false, 'mensaje' => 'Todos los campos son obligatorios.']);
            exit;
        }

        // Registro de la compra
        $resultado = $objCompras->registrarCompra($id_proveedor, $cantidad, $precio,$id_trabajador);

        // Retornar la respuesta en formato JSON
        echo json_encode($resultado);
    } else {
        echo json_encode(['status' => false, 'mensaje' => 'No se recibieron datos.']);
    }
} else {
    echo json_encode(['status' => false, 'mensaje' => 'Tipo de operación no válida.']);
}
?>