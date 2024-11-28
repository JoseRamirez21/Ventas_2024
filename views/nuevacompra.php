<!-- 
<div class="fo1" style="padding: 150px; width: auto; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
    <form class="form1" action="" id="formRegistrarCom"  style="width: 60%;">
    <h3 style="cursor: pointer; color: #007bff; text-align: center;" >Agregar Nueva Compra</h3>
        <div>
            <label for="id_producto"> Producto:</label>
            <select type="text" name="id_producto" id="id_producto" placeholder="ID Producto" class="form-control" required>
            <option  class="id_proveedor" >Seleccione</option></select>
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad" class="form-control" required>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio" class="form-control" required>
        </div>
        <div>
            <label for="trabajador">Trabajador:</label>
            <select type="text" name="trabajador" id="trabajador" placeholder="ID Trabajador" class="form-control" required>
            <option  class="trabajador" >Seleccione</option></select>
        </div>
        <br>
        <button type="button" class="btn btn-success" style="width: 30%; display: block; margin: 0 auto;" type="button" class="btn btn-success" onclick="registrarCompra();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>-->

 
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Compra</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #ffffff; /* Fondo blanco */
            color: #333; /* Color de texto oscuro */
        }
        .fo1 {
            padding: 40px;
            width: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 100px auto;
            background: rgba(240, 240, 240, 0.9); /* Fondo claro para el formulario */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
        h3 {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-success {
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="fo1" style="margin-top: 170px;">
        <form class="form1" action="" id="formRegistrarCom" style="width: 100%;">
            <h3 class="text-center"><i class="fas fa-shopping-cart"></i> Agregar Nueva Compra</h3>
            <div class="form-group">
                <label for="id_producto">Producto:</label>
                <select name="id_producto" id="id_producto" class="form-control" required>
                    <option class="id_proveedor">Seleccione</option>
                    <!-- Opciones se agregarán dinámicamente -->
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="trabajador">Trabajador:</label>
                <select name="trabajador" id="trabajador" class="form-control" required>
                    <option class="trabajador">Seleccione</option>
                    <!-- Opciones se agregarán dinámicamente -->
                </select>
            </div>
            <button type="button" class="btn btn-success btn-block" onclick="registrarCompra();">
                <i class="fas fa-check"></i> Registrar
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>
    <script>listar_productos();</script>
<script>listar_trabajadores();</script>
</body>
</html>