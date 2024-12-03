<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f0f4f8; /* Color de fondo más claro */
            font-family: 'Arial', sans-serif;
        }
        .admin-panel { 
            margin-bottom: 150px; /* Margen inferior */
            margin-left: auto; /* Centrar el panel */
            margin-right: auto; /* Centrar el panel */
            max-width: 70%; /* Ancho máximo del panel */
        }
        .card {
            transition: transform 0.3s, box-shadow 0.3s; /* Transiciones suaves */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Sombra para profundidad */
            padding: 40px; /* Espaciado interno */
            text-align: center; /* Centrar contenido */
            background: linear-gradient(135deg, #ffffff, #e1e1e1); /* Fondo degradado */
            flex: 1; /* Permitir que las tarjetas crezcan y se contraigan */
            margin: 10px; /* Margen entre tarjetas */
        }
        .card:hover {
            transform: translateY(-8px); /* Efecto de elevación */
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.25); /* Sombra más pronunciada al hover */
        }
        .btn-custom {
            width: 100%;
            margin: 10px 0; /* Margen entre botones */
            border-radius: 25px; /* Bordes redondeados en botones */
            font-weight: bold; /* Negrita en texto de botones */
        }
        h1 {
            margin-bottom: 40px; /* Margen inferior al título */
            color: #343a40; /* Color de título */
            font-size: 2.5em; /* Tamaño de fuente más grande */
        }
        .icon {
            font-size: 50px; /* Tamaño de icono aumentado */
            margin-bottom: 15px;
        }
        .text-success { background-color: #dff0d8; }
        .text-primary { background-color: #d9edf7; }
        .text-warning { background-color: #fcf8e3; }
        .text-danger { background-color: #f2dede; }
    </style>
</head>
<body>

<div class="container admin-panel" style="margin-top: 200px;">
    <h1 class="text-center">Bienvenido al Panel de Administración</h1>
    <div class="d-flex flex-row justify-content-center">
        <!-- Sección de Compras -->
        <div class="card text-success">
            <div class="card-body">
                <i class="fas fa-shopping-cart icon"></i>
                <h5 class="card-title">Compras</h5>
                <a href="<?php echo BASE_URL; ?>compras" class="btn btn-primary btn-custom">Mostrar Compras</a>
                <a href="<?php echo BASE_URL; ?>nuevacompra" class="btn btn-success btn-custom">Registrar Compra</a>
            </div>
        </div>

        <!-- Sección de Personas -->
        <div class="card text-primary">
            <div class="card-body">
                <i class="fas fa-users icon"></i>
                <h5 class="card-title">Personas</h5>
                <a href="<?php echo BASE_URL; ?>personas" class="btn btn-primary btn-custom">Mostrar Personas</a>
                <a href="<?php echo BASE_URL; ?>nuevapersona" class="btn btn-success btn-custom">Registrar Persona</a>
            </div>
        </div>

        <!-- Sección de Productos -->
        <div class="card text-warning">
            <div class="card-body">
                <i class="fas fa-box icon"></i>
                <h5 class="card-title">Productos</h5>
                <a href="<?php echo BASE_URL; ?>productos" class="btn btn-primary btn-custom">Mostrar Productos</a>
                <a href="<?php echo BASE_URL; ?>nuevoproducto" class="btn btn-success btn-custom">Registrar Producto</a>
            </div>
        </div>

        <!-- Sección de Categorías -->
        <div class="card text-danger">
            <div class="card-body">
                <i class="fas fa-th-list icon"></i>
                <h5 class="card-title">Categorías</h5>
                <a href="<?php echo BASE_URL; ?>categorias" class="btn btn-primary btn-custom">Mostrar Categorías</a>
                <a href="<?php echo BASE_URL; ?>nuevacategoria" class="btn btn-success btn-custom">Registrar Categoría</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>