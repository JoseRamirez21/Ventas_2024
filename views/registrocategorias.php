
    <div class="container mt-5" style="padding: 150px; width: 82%; display: block; margin: 0 auto; ">
        <h2>Registrar Categoría</h2>
        <form action="CategoriaController.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la Categoría:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen (opcional):</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-success"  style="width: 40%; display: block; margin: 0 auto;">Registrar</button>
        </form>
    </div>
