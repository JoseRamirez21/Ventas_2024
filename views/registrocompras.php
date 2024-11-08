
    <div class="container mt-5" style="padding: 150px; width: 82%; display: block; margin: 0 auto; ">
        <h2>Registrar Compra</h2>
        <form action="CompraController.php" method="POST">
            <div class="mb-3">
                <label for="proveedor" class="form-label">Proveedor:</label>
                <select class="form-select" id="proveedor" name="proveedor" required>
                    <option value="">Seleccionar Proveedor</option>
                    <!-- Aquí puedes agregar opciones dinámicamente desde la base de datos -->
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha de Compra:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="productos" class="form-label">Productos Comprados:</label>
                <input type="text" class="form-control" id="productos" name="productos" placeholder="Producto1, Producto2" required>
            </div>
            <div class="mb-3">
                <label for="monto_total" class="form-label">Monto Total:</label>
                <input type="number" class="form-control" id="monto_total" name="monto_total" required>
            </div>
            <button type="submit" class="btn btn-success"  style="width: 40%; display: block; margin: 0 auto;">Registrar</button>
        </form>
    </div>

    