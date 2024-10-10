<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JC Licores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>views/plantilla/pages/estilo.css">

    <style>
        .navbar-custom {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .navbar-brand-custom {
            font-weight: bold;
        }

        .search-bar {
            flex: 1;
        }

        .category-menu {
            background-color: #226dc2;
        }

        .category-menu a {
            color: #fff;
            text-transform: uppercase;
        }

        .category-menu .nav-link {
            margin: 0 10px;
        }

        .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        main {
            padding-top: 16px;
        }

        .card {
            width: 288px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin: 10px;
        }

        .product-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card-body {
            text-align: center;
        }

        .container-fluid1 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;

        }

        .footer {
            background-color: #000;
            color: #fff;
            padding: 0px 0;

        }

        .footer a {
            color: #fff;
        }

        .footer .icon {
            font-size: 20px;
        }

        .card img {

            height: 250px;
        }





        .event-banner {
            position: relative;
            color: white;
            text-align: left;
        }

        .event-banner img {
            width: 100%;
            height: auto;
        }

        .event-banner .content {
            position: absolute;
            top: 50%;
            left: 10%;
            transform: translateY(-50%);
        }

        .event-banner .content h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .event-banner .content p {
            font-size: 1.5rem;
        }

        .event-banner .content .btn {
            margin-top: 20px;
        }



        .b_whatsaap {
    position: fixed;
    bottom: 25px;
    left: 1740px; /* Cambiado a left para mover a la izquierda */
    z-index: 1000;
    animation: bounce 1s infinite;
}

.b_whatsaap img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(30, 200, 55, 0.2);
    transition: transform 0.3s;
}

.b_whatsaap img:hover {
    transform: scale(1.1);
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(10px);
    }
    40% {
        transform: translateY(-20px);
    }
    60% {
        transform: translateY(-10px);
    }
}





    .service-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80%;
            padding: 2rem;
            background-color: rgb(210, 220, 223);
        }
        .service-icon {
            font-size: 2rem;
            color: blue;
        }
        .service-title {
            font-weight: bold;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }
        .service-subtitle {
            color: #6c757d;
        }
        



/*estilo carrito */
        .delivery-banner {
            background-color: #fff;
            border: 4px solid black;
            text-align: center;
            padding: 1rem;
            position: relative;
        }
        .delivery-banner .line-top, .delivery-banner .line-bottom {
            height: 5px;
            background-color: red;
            width: 100%;
            margin: 0 auto;
        }
        .delivery-icon {
            font-size: 2rem;
            color: rgb(49, 49, 203);
            margin-right: 1rem;
            margin-left: 1rem;
        }
        .delivery-title {
            font-weight: bold;
            font-size: 1.5rem;
            color: red;
        }
        .conditions {
            color: black;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
        .conditions a {
            color: blue;
            text-decoration: none;
        }


        
        /*container_carrito */
        .promo-section {
            margin-top: 20px;
            text-align: center;
        }

        .promo-input {
            margin-right: 10px;
            padding: 5px;
        }

        .total-section {
            text-align: right;
            margin-top: 20px;
        }

        .cart-icon {
            width: 30px;
            height: auto;
            margin-right: 10px;
        }

        .details-icon {
            margin-left: 10px;
            cursor: pointer;
        }

        .payment-methods {
            margin-top: 30px;
            text-align: center;
        }

        .payment-methods img {
            width: 70px;
            height: auto;
            margin: 10px;
        }

        
        .background-image {
    background-image: url('./views/include/123.webp'); /* Cambia 'your-image.jpg' por la ruta de tu imagen */
    background-size: cover;
    background-position: center;
    height: 700px; /* Altura de toda la pantalla */
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Caja del formulario de suscripción */
.subscribe-box {
    background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra para dar efecto de elevación */
}




/* Estilo del modal */
.modal-content {
    border-radius: 15px;
    padding: 20px;
}

.modal-header {
    border-bottom: none;
    padding-bottom: 0;
}

.modal-title {
    font-size: 1.5rem;
    font-weight: bold;
}

.modal-body {
    display: flex;
    align-items: center;
}

.product-preview img {
    width: 100%;
    border-radius: 10px;
}

.current-price {
    color: #dc3545;
    font-size: 1.5rem;
    font-weight: bold;
}

.discount-price {
    text-decoration: line-through;
    color: #6c757d;
    font-size: 1.2rem;
}

.text-success {
    color: #28a745 !important;
}

.btn-success {
    background-color: #28a745;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    width: 100%;
}




    </style>
</head>

<body>


    <header>
        <div class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" >
                <div class="container-fluid d-flex justify-content-center align-items-center ">

                    <a class="navbar-brand navbar-brand-custom mx-3" href="#">
                         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcOg8Ax5g9goNiTXPtuLwE23JPqOtrO3VSEQ&s" style="width: 50px; height: 40px;" alt="">       JC LICORES </a>
                    <form class="d-flex search-bar mx-3">
                        <input class="form-control me-2" type="search"
                            placeholder="Busca productos, categorías o marcas" aria-label="Search">
                        <button class="fa-solid fa-magnifying-glass" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <div class="dropdown mx-3 ">
                        <button class="btn btn-light dropdown-toggle" type="button" id="accountDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Cuenta
                        </button>
                        <ul class="dropdown-menu " aria-labelledby="accountDropdown">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>registrarse">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="https://apps.apple.com/us/app/licores-mundiales/id1473051773" target="_blank">Cerrar sesión</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-outline-secondary mx-3 fa-solid fa-cart-shopping" href="<?php echo BASE_URL; ?>carrito">
                        <i class="bi bi-cart "></i> </a>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg category-menu">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>inicio">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>whisky">Whisky</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>vinos">Vinos</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>burbuja">Burbujas</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>ron">Ron</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>vodka">Vodka</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>tequila">Tequilas</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>pisco">Pisco</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>cerveza">Cervezas</a></li>
                        </ul>
                    </div>
                </div>
        </div>
        </nav>
    </header>
    <body>
        
