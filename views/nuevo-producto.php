<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex justify-content-center" style="margin-top: 140px;">
    <div class="container1 py-5" style="width: 800px;">
    <h1 class="mb-4 text-center">Formulario de Producto</h1>
    <form id="frmRegistrar">
        <div class="mb-3">
    <label for="codigo" class="form-label">Código</label>
    <input type="text" class="form-control form-control-lg" id="codigo" name="codigo" required>
</div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"  required>
            </div>
            <div class="mb-3">
                <label for="detalle" class="form-label">Detalle</label>
                <textarea class="form-control" id="detalle" rows="3" name="detalle" required></textarea>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
            <div class="mb-3">
                <label for="id_categoria" class="form-label">Categoría</label>
                <input type="number" class="form-control" id="categoria" name="categoria" required>
            </div>
            <div class="mb-3">
                <label for="fecha_vencimiento" class="form-label">Fecha de Vencimiento</label>
                <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
            </div>
            <div class="mb-3">
                <label for="id_proveedor" class="form-label">ID Proveedor</label>
                <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="registrar_producto();">Registrar</button>
        </form>
    </div>
</div>
<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const form = document.getElementById('product-form');
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            // Aquí puedes agregar la lógica para registrar o actualizar el producto
            console.log('Formulario enviado');
        });
    </script>
</body>
</html>