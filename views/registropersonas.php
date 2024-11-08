
    <div class="container mt-5" style="padding: 150px; width: 82%; display: block; margin: 0 auto; ">
        <h2>Registrar Persona</h2>
        <form action="PersonaController.php" method="POST">
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo de Persona:</label>
                <select class="form-select" id="tipo" name="tipo" required>
                    <option value="cliente">Cliente</option>
                    <option value="empleado">Empleado</option>
                    <option value="proveedor">Proveedor</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <button type="submit" class="btn btn-success"  style="width: 40%; display: block; margin: 0 auto;">Registrar</button>
        </form>
    </div>
