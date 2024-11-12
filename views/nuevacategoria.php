<div class="fo1" style="padding: 170px; width: 850px; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
    <form class="form1" action="" id="formRegistrarCat" style="width: 100%;">
    <h3 style="cursor: pointer; color: #007bff; text-align: center;" >Agregar Nueva Categoría</h3>
        <div class="form-group">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="detalle">Detalle:</label>
            <input type="text" name="detalle" id="detalle" placeholder="Detalle" class="form-control" required>
        </div>
        <button type="button" class="btn btn-success"  style="width: 30%; display: block; margin: 0 auto;" type="button" class="btn btn-success" onclick="registrarCategoria();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script>
