
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Los Productos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #ffffff; /* Fondo blanco */
            color: #333; /* Color de texto oscuro */
        }
        .fo1 {
            padding: 40px;
            width: 600px; /* Ajustando el ancho para mejor visualización */
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
    <div class="fo1" style="margin-top : 150px;">
        <form class="form1" action="" id="formRegistrarProd" style="width: 100%;">
            <h3 class="text-center"><i class="fas fa-plus-circle"></i> Editar Los Productos</h3>
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" name="codigo" id="codigo" placeholder="Código" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="detalle">Detalle:</label>
                <input type="text" name="detalle" id="detalle" placeholder="Detalle" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio" class="form-control" required>
            </div>
            <!-- <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" name="stock" id="stock" placeholder="Stock" class="form-control" required>
            </div> -->
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select name="categoria" id="categoria" class="form-control" required>
                    <option value="">Seleccionar</option>
                    <!-- Opciones se agregarán dinámicamente -->
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_v">Fecha de Vencimiento:</label>
                <input type="date" name="fecha_v" id="fecha_v" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen del Producto:</label>
                <input type="file" name="imagen" id="imagen" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="proveedor">Proveedor:</label>
                <select name="proveedor" id="proveedor" class="form-control" required>
                    <option value="">Seleccionar</option>
                    <!-- Opciones se agregarán dinámicamente -->
                </select>
            </div>
            <button type="button" class="btn btn-success btn-block" onclick="registrarProducto();">
                <i class="fas fa-check"></i> Registrar
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>
    <script>
        listar_categorias();
        listar_proveedores();
    </script>
    <script>
        //http://localhost/Ventas_2024/editar-producto/1
        const id_p=<?php $pagina=explode("/",$_GET['views']); echo $pagina['1'];?>;
        ver_producto(id_p);
    </script>
</body>
</html>