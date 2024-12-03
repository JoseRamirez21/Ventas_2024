<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body {
    background: #f4f7fa;
    font-family: 'Arial', sans-serif;
}

.container {
    padding: 40px;
    max-width: 1200px;
    margin: auto;
    background-color: #ffffff;
    border-radius: 0.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
    font-size: 2rem;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background-color: #343a40;
    color: white;
}

th {
    padding: 15px;
    font-weight: bold;
    text-align: center;
}

td {
    text-align: center;
    padding: 12px;
    border-bottom: 1px solid #dee2e6;
}

tr:hover {
    background-color: #c9c3c2;
}

.btn {
    transition: background-color 0.3s, transform 0.2s;
    border-radius: 5px;
}

.btn:hover {
    transform: translateY(-2px);
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: white;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
}

.btn i {
    margin-right: 5px;
}
.btn-container {
    display: flex;
    justify-content: center; /* Centra el botón horizontalmente */
    align-items: center; /* Centra el botón verticalmente */
    height: 100%; /* Asegura que el contenedor tenga suficiente altura */
}
.btn-warning {
    border-radius: 50px; /* Bordes redondeados */
    padding: 12px 30px; /* Aumento de tamaño del botón */
    font-size: 1.1rem; /* Tamaño de fuente más grande */
    font-weight: 600; /* Fuente más gruesa */
    color: white; /* Texto blanco */
    background: linear-gradient(45deg, #ff8c00, #f7b731); /* Degradado naranja a amarillo */
    border: none; /* Sin borde */
    cursor: pointer; /* Manito al pasar el ratón */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra suave para dar profundidad */
    transition: all 0.4s ease; /* Transiciones suaves */
}

.btn-warning:hover {
    background: linear-gradient(45deg, #f7b731, #ff8c00); /* Cambio de degradado al pasar el ratón */
    transform: translateY(-5px); /* Efecto de elevación */
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada al hacer hover */
}

.btn-warning:active {
    transform: translateY(2px); /* Efecto de presión al hacer clic */
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* Sombra suave al hacer clic */
}

.btn-warning i {
    margin-right: 8px; /* Espaciado entre el icono y el texto */
    font-size: 1.2rem; /* Icono un poco más grande */
}
    </style>
</head>
<body>
<div class="col-12" style="padding: 200px; width: auto; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
<table border="1" id="tbl_producto">
    <thead >
<tr>
    <th>Nro</th>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Stock</th>
    <th>Categoria</th>
    <th>Proveedor</th>
    <th>Acciones</th>
</tr>
    </thead>
    <tbody id="tbl_producto">

    </tbody>
</table>
</div>
<div class="btn-container">
    <button type="button" class="btn btn-warning" onclick="window.history.back();">
        <i class="fas fa-arrow-left"></i> Regresar
    </button>
</div>
</body>
</html>
<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>  

