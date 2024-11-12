
<div class="fo1" style="padding: 150px; width: auto; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
    <form class="form1" action="" id="formRegistrarCom"  style="width: 60%;">
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
        <button type="button" class="btn btn-success" onclick="registrar_compra();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>
<script>listar_productos();</script>
<script>listar_trabajadores();</script>

