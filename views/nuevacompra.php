<div class="fo1" style="padding: 150px; width: auto; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
    <form class="form1" action="" id="formRegistrarProd"  style="width: 60%;">
        <div>
            <label for="id_producto">ID Producto:</label>
            <input type="text" name="id_producto" id="id_producto" placeholder="ID Producto" class="form-control" required>
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
            <label for="id_trabajador">ID Trabajador:</label>
            <input type="text" name="id_trabajador" id="id_trabajador" placeholder="ID Trabajador" class="form-control" required>
        </div>
        <br>
        <button type="button" class="btn btn-success" onclick="registrarProducto();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>
<script>listar_categorias();</script>
