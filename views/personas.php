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
    background-color: #f1f1f1;
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
    </style>
</head>
<body>
<div class="col-12" style="padding: 200px; width: auto; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
<table border="1" >
    <thead >
<tr>
    <th>Id</th>
    <th>Nro_identidad</th>
    <th>Razon Social</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Departamento</th>
    <th>Direccion</th>
    <th>Rol</th>
    <th>Fecharegistro</th>
    <th>Acciones</th>
</tr>
    </thead>
    <tbody id="tbl_persona">

    </tbody>
</table>
</div>
</body>
</html>
<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>  

