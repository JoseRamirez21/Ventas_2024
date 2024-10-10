<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JC Licores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="estilo.css">
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





        


      


    .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
 
        }
        .footer a {
            color: #fff;
        }
        .footer .icon {
            font-size: 20px;
        }
        .social-icons1 img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }





        .section-header {
            background-color: black;
            color: white;
            padding: 10px;
        }

       
        .b_whatsaap {
    position: fixed;
    bottom: 25px;
    right: 20px;
    z-index: 1000;
    animation: bounce 1s infinite;
}

.b_whatsaap img {
    width: 80px;
    height: 80px;
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
    </style>
</head>
<body>

    
    <header>
      
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
                            <li><a class="dropdown-item" href="login1.html">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="https://apps.apple.com/us/app/licores-mundiales/id1473051773" target="_blank">Cerrar sesión</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-outline-secondary mx-3 fa-solid fa-cart-shopping" href="carrito.html"><i
                            class="bi bi-cart "></i> </a>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg category-menu">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="pagina_principal.html">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="Whisky.html">Whisky</a></li>
                            <li class="nav-item"><a class="nav-link" href="Vinos.html">Vinos</a></li>
                            <li class="nav-item"><a class="nav-link" href="Burbujas.html">Burbujas</a></li>
                            <li class="nav-item"><a class="nav-link" href="Ron.html">Ron</a></li>
                            <li class="nav-item"><a class="nav-link" href="Vodka.html">Vodka</a></li>
                            <li class="nav-item"><a class="nav-link" href="tequila.html">Tequilas</a></li>
                            <li class="nav-item"><a class="nav-link" href="Pisco.html">Pisco</a></li>
                            <li class="nav-item"><a class="nav-link" href="Cerveza.html">Cervezas</a></li>
                        </ul>
                    </div>
                </div>
        </div>
        </nav>
    </header>
    


 


    <main>
    
        <div class="container" id="container">
            <div class="form-container sign-up">
                <form>
                    <h1>Crear Usuario</h1>
                    <div class="social-icons">
                        <a href="https://web.whatsapp.com/" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/josec_ramirezramos/" class="icon"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" class="icon"><i class="fa-brands fa-google"></i></a>
                        <a href="https://www.facebook.com/josec.ramirez.718" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                    <span>Puede utilizar su correo electronico</span>
                    <input type="text" placeholder="Nombre">
                    <input type="email" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button><a href="<?php echo BASE_URL; ?>inicio" style="color:white;">Registrarse <i class="fa fa-user"></i></a></button>
                </form>
            </div>
            <div class="form-container sign-in">
                <form>
                    <h1>Iniciar Sesión</h1>
                    <div class="social-icons">
                        <a href="https://web.whatsapp.com/" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/josec_ramirezramos/" class="icon"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" class="icon"><i class="fa-brands fa-google"></i></a>
                        <a href="https://www.facebook.com/josec.ramirez.718" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                    <span>Inicie sesión con su correo electrónico</span>
                    <input type="email" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <button><a href="<?php echo BASE_URL; ?>inicio" style="color:white;"> Iniciar Sesión <i class="fa fa-user"></i></a></button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>¡Bienvenido de nuevo!</h1>
                        <p>Ingrese sus datos y disfrute de nuestra Pagina Web</p>
                        <button class="hidden" id="login">Iniciar Sesión</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Hola!</h1>
                        <p>Regístrese con sus datos personales para poder comprar y ver las grandes promociones </p>
                        <button class="hidden" id="register">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    
    
    </main>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>