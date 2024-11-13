<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        /* Navbar */
        .navbar-custom {
    background: linear-gradient(90deg, rgba(10, 76, 127, 1), rgba(28, 114, 197, 1), rgba(10, 76, 127, 1));
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.5);
    position: relative;
}
    
        .navbar-brand img {
            height: 60px;
            margin-right: 12px;
            filter: drop-shadow(0 0 10px rgba(66, 165, 245, 0.7));
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
            filter: drop-shadow(0 0 20px rgba(66, 165, 245, 1));
        }
        
        .navbar-brand span {
            color: #ffffff;
            font-size: 1.8rem;
            font-weight: bold;
            text-shadow: 0 0 8px rgba(66, 165, 245, 0.5);
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: 500;
            font-size: 1.2rem;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #42a5f5;
            text-shadow: 0px 0px 10px rgba(66, 165, 245, 0.7);
        }

        .container h2, .container p {
            color: #ffffff;
            text-shadow: 0px 0px 8px rgba(66, 165, 245, 0.7);
        }

        .container {
            background: linear-gradient(90deg, rgba(10, 76, 127, 1), rgba(28, 114, 197, 1), rgba(10, 76, 127, 1));
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(66, 165, 245, 0.7);
        }

        .card-icon {
            font-size: 3rem;
            color: white;
            transition: color 0.3s ease;
        }

        .card:hover .card-icon {
            color: #82b1ff;
        }

        .btn-primary {
            background: #42a5f5;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background: #82b1ff;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcOg8Ax5g9goNiTXPtuLwE23JPqOtrO3VSEQ&s" alt="Logo"> 
            <span>JC Licores</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenedor principal -->
<div class="container my-5">
    <h2 class="text-center">Bienvenido al Panel Administrativo</h2>
    
    <div class="row mt-4">
        <!-- Compras -->
        <div class="col-md-3">
            <div class="card text-center p-4">
                <div class="card-body">
                    <i class="bi bi-cart-fill card-icon"></i> <!-- Icono de compras -->
                    <h5 class="card-title mt-3">Compras</h5>
                    <p class="card-text">Administre las compras de productos.</p>
                    <a href="../../views/nuevacompra.php" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
        <!-- Persona -->
        <div class="col-md-3">
            <div class="card text-center p-4">
                <div class="card-body">
                    <i class="bi bi-people-fill card-icon"></i> <!-- Icono de personas -->
                    <h5 class="card-title mt-3">Persona</h5>
                    <p class="card-text">Administre la información de personas.</p>
                    <a href="../nuevapersona.php" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
        <!-- Producto -->
        <div class="col-md-3">
            <div class="card text-center p-4">
                <div class="card-body">
                    <i class="bi bi-box-seam card-icon"></i> <!-- Icono de productos -->
                    <h5 class="card-title mt-3">Producto</h5>
                    <p class="card-text">Administre los productos disponibles.</p>
                    <a href="../nuevapersona.php" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
        <!-- Categoría -->
        <div class="col-md-3">
            <div class="card text-center p-4">
                <div class="card-body">
                    <i class="bi bi-tags-fill card-icon"></i> <!-- Icono de categoría -->
                    <h5 class="card-title mt-3">Categoría</h5>
                    <p class="card-text">Administre las categorías de productos.</p>
                    <a href="../../views/nuevacategoria.php" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="bg-dark text-white mt-5 p-4 text-center">
        <div class="container1">
            <div class="row text-center">
                <div class="col-md-4">
                    <h5>Sobre Nosotros</h5>
                    <p>Somos una empresa de gran reconocimiento por nuestro envios rapidos y precios comodos
                        Contamos con varias sucursales dentro del pais.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo BASE_URL; ?>inicio" class="text-white" style="text-decoration: none;">Inicio</a>
                        </li>
                        <li><a href="<?php echo BASE_URL; ?>libro" class="text-white" style="text-decoration: none;">Libro de
                                Reclamaciones</a></li>
                        <li><a href="<?php echo BASE_URL; ?>terminos" class="text-white" style="text-decoration: none;">Términos y
                                Condiciones</a></li>
                        <li><a href="<?php echo BASE_URL; ?>politica" class="text-white" style="text-decoration: none;">Política de
                                Privacidad</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contáctanos</h5>
                    <p>Email: <a href="mailto:soportesistemanotas@gmail.com" class="text-white"
                            style="text-decoration: none;">JCLicores@gmail.com</a></p>
                    <p>Teléfono: <a href="tel:901267943" class="text-white" style="text-decoration: none;">
                            901267943</a></p>
                    <div class="social-icons mt-2 ">
                        <a href="https://web.whatsapp.com/" target="_blank" class="me-4">
                            <i class="fa-brands fa-whatsapp" style="font-size: 35px; "></i>
                        </a>
                        <a href="https://www.facebook.com/josec.ramirez.718" target="_blank" class="me-4">
                            <i class="fa-brands fa-facebook" style="font-size: 35px;"></i>
                        </a>
                        <a href="https://www.instagram.com/josec_ramirezramos/" target="_blank" class="me-4">
                            <i class="fa-brands fa-instagram" style="font-size: 35px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="bg-white">
            <p class="mb-0">&copy; 2024 JC Licores. Todos los derechos reservados a nuestra empresa.</p>
        </div>
    </footer>
<!-- Bootstrap JS y dependencias -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
