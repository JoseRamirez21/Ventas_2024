<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Compra</title>
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
        .btn-success,.btn-secondary {
    border-radius: 20px;
    width: 70%;
    display: flex;
    align-items: center;
    justify-content: center; /* Centra el contenido del botón */
    margin: 0 auto; /* Centra el botón horizontalmente */
    margin-top: 20px;
}
/* Contenedor para centrar los botones */
.btn-container {
    display: flex;
    justify-content: center; /* Centra los botones horizontalmente */
    align-items: center; /* Centra los botones verticalmente */
    height: 100%; /* Asegura que el contenedor tenga suficiente altura */
    gap: 20px; /* Espacio entre los botones */
}

/* Estilo para el botón de registrar (btn-success) */
.btn-success {
    border-radius: 50px; /* Bordes redondeados */
    padding: 12px 30px; /* Aumento de tamaño del botón */
    font-size: 1.1rem; /* Tamaño de fuente más grande */
    font-weight: 600; /* Fuente más gruesa */
    color: white; /* Texto blanco */
    background: linear-gradient(45deg, #28a745, #34d058); /* Degradado verde */
    border: none; /* Sin borde */
    cursor: pointer; /* Manito al pasar el ratón */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra suave para dar profundidad */
    transition: all 0.4s ease; /* Transiciones suaves */
}

.btn-success:hover {
    background: linear-gradient(45deg, #34d058, #28a745); /* Cambio de degradado al pasar el ratón */
    transform: translateY(-5px); /* Efecto de elevación */
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada al hacer hover */
}

.btn-success:active {
    transform: translateY(2px); /* Efecto de presión al hacer clic */
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* Sombra suave al hacer clic */
}

.btn-success i {
    margin-right: 8px; /* Espaciado entre el icono y el texto */
    font-size: 1.2rem; /* Icono un poco más grande */
}

/* Estilo para el botón de regresar (btn-secondary) */
.btn-secondary {
    border-radius: 50px; /* Bordes redondeados */
    padding: 12px 30px; /* Aumento de tamaño del botón */
    font-size: 1.1rem; /* Tamaño de fuente más grande */
    font-weight: 600; /* Fuente más gruesa */
    color: white; /* Texto blanco */
    background: linear-gradient(45deg, #6c757d, #adb5bd); /* Degradado gris */
    border: none; /* Sin borde */
    cursor: pointer; /* Manito al pasar el ratón */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra suave para dar profundidad */
    transition: all 0.4s ease; /* Transiciones suaves */
}

.btn-secondary:hover {
    background: linear-gradient(45deg, #adb5bd, #6c757d); /* Cambio de degradado al pasar el ratón */
    transform: translateY(-5px); /* Efecto de elevación */
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada al hacer hover */
}

.btn-secondary:active {
    transform: translateY(2px); /* Efecto de presión al hacer clic */
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* Sombra suave al hacer clic */
}

.btn-secondary i {
    margin-right: 8px; /* Espaciado entre el icono y el texto */
    font-size: 1.2rem; /* Icono un poco más grande */
}

    </style>
</head>
<body>
    <div class="fo1" style="margin-top: 170px;">
        <form class="form1" action="" id="formRegistrarCom" style="width: 100%;">
            <h3 class="text-center"><i class="fas fa-shopping-cart"></i> Agregar Nueva Compra</h3>
            <input type="hidden" name="id_compra" id="id_compra" value="">
            <div class="form-group">
                <label for="id_producto">Producto:</label>
                <select name="id_producto" id="id_producto" class="form-control" required>
                    <option class="id_proveedor">Seleccione</option>
                    <!-- Opciones se agregarán dinámicamente -->
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="trabajador">Trabajador:</label>
                <select name="trabajador" id="trabajador" class="form-control" required>
                    <option class="trabajador">Seleccione</option>
                    <!-- Opciones se agregarán dinámicamente -->
                </select>
            </div>
            <div>
            <button type="button" class="btn btn-success btn-block" onclick="actualizar_compra();">
                <i class="fas fa-check"></i> Actualizar
            </button>
            <button type="button" class="btn btn-secondary"  onclick="window.history.back();">
    <i class="fas fa-arrow-left"></i> Regresar
</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>
    <script>listar_productos();</script>
<script>listar_trabajadores();</script>
<script>
        //http://localhost/Ventas_2024/editar-producto/1
        const id_p=<?php $pagina=explode("/",$_GET['views']); echo $pagina['1'];?>;
        ver_compra(id_p);
    </script>
</body>
</html>