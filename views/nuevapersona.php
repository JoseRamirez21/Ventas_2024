<!-- <div class="fo1" style="padding: 150px; width: auto; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
    <form class="form1" action="" id="formRegistrarPer"  style="width: 60%;">
    <h3 style="cursor: pointer; color: #007bff; text-align: center;" >Agregar Nueva Persona</h3>
    <div>
    <label for="numero_identidad">Número de Identidad:</label>
    <input type="text" name="numero_identidad" id="nro_identidad" placeholder="Número de Identidad" class="form-control" required>
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
    <input type="number" name="cod_postal" id="cod_postal" placeholder="Código Postal" class="form-control" required>
</div>
<div>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control" required>
</div>
<div>
    <label for="rol">Rol:</label>
   
    <select name="rol" id="rol" class="form-control" placeholder="Rol" required>
        <option value="">Seleccionar</option>
        <option value="Proveedor">Proveedor</option>
        <option value="Cliente">Cliente</option>
    </select>
</div>

<br>
<button type="button" class="btn btn-success" style="width: 30%; display: block; margin: 0 auto;" type="button" class="btn btn-success" onclick="registrarPersona();">Registrar</button>

<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>

</div> -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Persona</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #ffffff; /* Fondo blanco */
            color: #333; /* Color de texto oscuro */
        }
        .fo1 {
            padding: 40px;
            width: 600px;
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
    <div class="fo1" style="margin-top: 150px;">
        <form class="form1" action="" id="formRegistrarPer" style="width: 100%;">
            <h3 class="text-center"><i class="fas fa-user-plus"></i> Agregar Nueva Persona</h3>
            <div class="form-group">
                <label for="numero_identidad">Número de Identidad:</label>
                <input type="text" name="numero_identidad" id="nro_identidad" placeholder="Número de Identidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="razon_social">Razón Social:</label>
                <input type="text" name="razon_social" id="razon_social" placeholder="Razón Social" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" id="correo" placeholder="Correo Electrónico" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" name="departamento" id="departamento" placeholder="Departamento" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="provincia">Provincia:</label>
                <input type="text" name="provincia" id="provincia" placeholder="Provincia" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="distrito">Distrito:</label>
                <input type="text" name="distrito" id="distrito" placeholder="Distrito" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cod_postal">Código Postal:</label>
                <input type="number" name="cod_postal" id="cod_postal" placeholder="Código Postal" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select name="rol" id="rol" class="form-control" required>
                    <option value="">Seleccionar</option>
                    <option value="Proveedor">Proveedor</option>
                    <option value="Cliente">Cliente</option>
                </select>
            </div>
            <button type="button" class="btn btn-success btn-block" onclick="registrarPersona();">
                <i class="fas fa-check"></i> Registrar
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>
</body>
</html>