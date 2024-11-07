
<div class="fo1" style="padding: 150px;">
<form class="form1" action="" id="formRegistrarProd">
    
    <div>
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo"  placeholder="Codigo" class="form-control" required>
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"  placeholder="Nombre" class="form-control" required>
    </div>
    <div>
        <label for="detalle">Detalle:</label>
        <input type="text" name="detalle" id="detalle"  placeholder="Detalle" class="form-control" required>
    </div>
    <div>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio"  placeholder="Precio" class="form-control" required>
    </div>
    <div>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock"  placeholder="Stock" class="form-control" required>
    </div>
    <div>
        <label for="categoria">Categoría:</label>
        <!-- <input type="text" name="categoria" id="categoria" class="form-control"  placeholder="Categoria" required> -->
        <select name="categoria" id="categoria" class="form-control"  placeholder="Categoria" required>  <option value="">Seleccionar</option></select>
       
    </div>
    <div>
    <label for="Fecha de Vencimiento">Fecha de Vencimiento:</label><br>
    <input type="date" name="fecha_v" id="fecha_v" placeholder="Fecha de Vencimiento" class="form-control" required>
    </div>
    <div>
        <label for="img">Imagen del Producto:</label>
        <input type="file" name="imagen" id="imagen"   class="form-control" required>
    </div>
    <div>
        <label for="proveedor">Proveedor:</label>
        <!-- <input type="number" name="proveedor" id="proveedor"  placeholder="Proveedor" class="form-control" required> -->
        <select name="proveedor" id="proveedor" class="form-control"  placeholder="Proveedor" required>  <option value="">Seleccionar</option></select>
    </div>
    <br>
    <button type="button" class="btn btn-success" onclick="registrarProducto();">Registrar</button>
</form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>
<script>listar_categorias();</script>
<script>listar_proveedores();</script>
