<div class="fo1" style="padding: 150px; width: auto; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
    <form class="form1" action="" id="formRegistrarProd"  style="width: 60%;">
    <div>
    <label for="numero_identidad">Número de Identidad:</label>
    <input type="text" name="numero_identidad" id="numero_identidad" placeholder="Número de Identidad" class="form-control" required>
</div>
<div>
    <label for="razon_social">Razón Social:</label>
    <input type="text" name="razon_social" id="razon_social" placeholder="Razón Social" class="form-control" required>
</div>
<div>
    <label for="telefono">Teléfono:</label>
    <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" class="form-control" required>
</div>
<div>
    <label for="correo">Correo Electrónico:</label>
    <input type="email" name="correo" id="correo" placeholder="Correo Electrónico" class="form-control" required>
</div>
<div>
    <label for="departamento">Departamento:</label>
    <input type="text" name="departamento" id="departamento" placeholder="Departamento" class="form-control" required>
</div>
<div>
    <label for="provincia">Provincia:</label>
    <input type="text" name="provincia" id="provincia" placeholder="Provincia" class="form-control" required>
</div>
<div>
    <label for="distrito">Distrito:</label>
    <input type="text" name="distrito" id="distrito" placeholder="Distrito" class="form-control" required>
</div>
<div>
    <label for="cod_postal">Código Postal:</label>
    <input type="text" name="cod_postal" id="cod_postal" placeholder="Código Postal" class="form-control" required>
</div>
<div>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control" required>
</div>
<div>
    <label for="rol">Rol:</label>
    <input type="text" name="rol" id="rol" placeholder="Rol" class="form-control" required>
</div>
<div>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control" required>
</div>
<div>
    <label for="estado">Estado:</label>
    <select name="estado" id="estado" class="form-control" required>
        <option value="">Seleccionar</option>
        <option value="activo">Activo</option>
        <option value="inactivo">Inactivo</option>
    </select>
</div>
<div>
    <label for="fecha_reg">Fecha de Registro:</label>
    <input type="date" name="fecha_reg" id="fecha_reg" class="form-control" required>
</div>
<br>
<button type="button" class="btn btn-success" onclick="registrarProducto();">Registrar</button>

<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>
<script>listar_categorias();</script>
</div>