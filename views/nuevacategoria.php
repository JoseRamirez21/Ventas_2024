<!-- <div class="fo1" style="padding: 170px; width: 850px; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
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

<script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script> -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Categoría</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #ffffff; /* Fondo blanco */
            color: #333; /* Color de texto oscuro */
        }
        .fo1 {
            padding: 40px;
            width: 500px;
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
    <div class="fo1" style="margin-top: 247px;">
        <form class="form1" action="" id="formRegistrarCat" style="width: 100%;">
            <h3 class="text-center"><i class="fas fa-plus-circle"></i> Agregar Nueva Categoría</h3>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="detalle">Detalle:</label>
                <input type="text" name="detalle" id="detalle" placeholder="Detalle" class="form-control" required>
            </div>
            <button type="button" class="btn btn-success btn-block" onclick="registrarCategoria();">
                <i class="fas fa-check"></i> Registrar
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script>
</body>
</html>