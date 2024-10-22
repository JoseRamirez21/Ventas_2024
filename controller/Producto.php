<?php
require_once('./model/productoModel.php');

$tipo = $_REQUEST['tipo'];

// instancio la clase modelProducto
$objProducto =  new ProductoModel();

if($tipo == "registrar" )
print_r($_POST);
   $codigo = $_POST['codigo'];
   $nombre = $_POST['nombre'];
   $detalle = $_POST['detalle'];
   $precio = $_POST['precio'];
   $stock = $_POST['stock'];
   $categoria = $_POST['categoria'];
   $fecha_vencimiento = $_POST['fecha_vencimiento'];
   $imagen = $_POST['imagen'];
   $id_proveedor = $_POST['id_proveedor'];

   if($codigo =="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" ||
   $fecha_vencimiento=="" || $imagen=="" || $id_proveedor==""){
// respuesta
    $arr_Respuesta = array('status'=> false,'mensaje'=> 'Error, capos vacíos');
   }else {
    $arrProducto = $objProducto ->registrarProducto($codigo, $nombre, $detalle, 
$precio, $stock, $categoria, $fecha_vencimiento, $imagen, $id_proveedor);
   }
?>