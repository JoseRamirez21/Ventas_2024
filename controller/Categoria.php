<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la categoria model
$objCategoria = new categoriaModel();

if ($tipo == "listar") {
    //respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {
        //recordemos que el array es para agregar las opciones de las categorias
        for ($i = 0; $i < count($arr_Categorias); $i++) {
            $id_categoria = $arr_Categorias[$i]->id;
            $categoria = $arr_Categorias[$i]->nombre;
            $opciones = '<a href=" '.BASE_URL.'editar-categoria/'.$id_categoria.'"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"  onclick="eliminar_categoria('.$id_categoria.');"></i></button>';  //eliminar_categoria(va llamar al id);
            $arr_Categorias[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Categorias;
    }

    echo json_encode($arr_Respuesta);
}



    



if ($tipo == "registrar") {
    // print_r($_POST);
    // echo $_FILES['imagen']['tmp_name'];

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        if ($nombre == "" || $detalle == "") {
            //respuesta
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacios'
            );
        } else {
            $arrCategoria =
                $objCategoria->registrarCategoria(
                    $nombre,
                    $detalle
                );
            if ($arrCategoria->id > 0) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Registro exitoso'
                );
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

if($tipo=="ver"){
    // print_r($_POST);
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->verCategoria($id_categoria);
    // print_r($arr_Respuesta);eso es para hacer la prueba 
    if(empty($arr_Respuesta)){
      $response = array('status' => false, 'mensaje' =>"Error, No hay informacion");
    }else{
      $response = array('status' => true, 'mensaje' => "Datos Encontrados", 'contenido' =>$arr_Respuesta);
    }
    echo json_encode($response);
    }


    
    if ($tipo == "actualizar") {
        // Obtener los datos del formulario
        $id_categoria = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : null;
        $detalle = isset($_POST['detalle']) ? trim($_POST['detalle']) : null;
    
        // Verificar si todos los campos están llenos
        if (empty($id_categoria) || empty($nombre) || empty($detalle)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Todos los campos son obligatorios.'
            ]);
            exit;
        }
    
        // Llamada al modelo para actualizar la categoría
        $resultado = $categoriaModel->actualizarCategoria($id_categoria, $nombre, $detalle);
    
        if ($resultado) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Categoría actualizada correctamente.'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'No se pudo actualizar la categoría. Intente nuevamente.'
            ]);
        }
        exit;
    }
    
    




    