<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: url('https://i.pinimg.com/736x/68/01/6e/68016e1b27ea65854ae38cf47696894c.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: white;
            width: 400px; /* Ampliado */
            position: relative;
            border-radius: 25px; /* Bordes más suaves */
            overflow: hidden;
            color: black;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3), -2px -2px 5px rgba(95, 94, 94, 0.3);
        }

        .container .slider {
            width: 200%;
            position: relative;
            transition: transform ease-out 0.3s;
            display: flex;
            background: url('https://i.pinimg.com/736x/7f/ce/10/7fce106b3bffef13d04140b9466d48a4.jpg') no-repeat center center/cover;
        }

        #register_toggle {
            display: none;
        }

        .container #register_toggle:checked + .slider {
            transform: translateX(-50%);
        }

        .form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
            padding: 2em 3em; /* Más espacio */
            width: 50%;
        }

        .title {
            text-align: center;
            font-weight: 700;
            font-size: 2em;
        }

        form .form_control {
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        form .form_control .label {
            position: absolute;
            top: 50%;
            left: 10px;
            transition: transform ease 0.2s;
            transform: translate(0%, -50%);
            font-size: 0.8em;
            user-select: none;
            pointer-events: none;
            color: black;
        }

        form .form_control .input {
            width: 100%;
            background-color: transparent;
            border: 2px solid black;
            outline: none;
            color: black;
            padding: 0.8rem; /* Más alto */
            font-size: 0.9rem;
            border-radius: 15px;
            transition: box-shadow ease 0.2s;
            box-shadow: 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(95, 94, 94, 0.25), inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.1), inset -1.5px -1.5px 3px rgba(95, 94, 94, 0.25);
        }

        form .form_control .input:focus,
        form .form_control .input:valid {
            box-shadow: 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(95, 94, 94, 0.25), inset 3px 3px 4px rgba(0, 0, 0, 0.1), inset -3px -3px 4px rgba(95, 94, 94, 0.25);
        }

        form .form_control .input:focus + .label,
        form .form_control .input:valid + .label {
            transform: translate(-150%, -50%);
        }

      

        .bottom_text {
            font-size: 0.90em;
        }

        form button {
    width: 80%;
    background-color: #000; /* Fondo negro */
    border: 2px solid #fff; /* Bordes blancos */
    outline: none;
    color: white; /* Texto blanco */
    padding: 1rem 2rem;
    font-size: 1rem;
    font-weight: bold;
    text-transform: uppercase; /* Texto en mayúsculas */
    border-radius: 10px;
    transition: all 0.4s ease; /* Transición suave */
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

form button::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300%;
    height: 300%;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    transition: all 0.5s ease;
    transform: translate(-50%, -50%);
    opacity: 0;
}

form button:hover {
    background-color: #111; /* Cambio de color de fondo al pasar el cursor */
    box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.5); /* Resplandor blanco */
    transform: scale(1.05); /* Efecto de escala */
}

form button:hover::before {
    width: 500%;
    height: 500%;
    opacity: 1; /* Aumenta el tamaño del resplandor al pasar el cursor */
}

form button:active {
    transform: scale(1.1); /* Aumenta el tamaño al hacer clic */
    box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.8); /* Resplandor más fuerte al presionar */
}

    </style>
    <script> const base_url = "<?php  echo BASE_URL;?>"</script>
</head>
<body>

<div class="container " style="margin:220px auto">
  <input type="checkbox" id="register_toggle">
  <div class="slider">
    <form class="form" id="frm_iniciar_sesion">
      <span class="title">Iniciar Sesion</span>
      <div class="form_control">
        <input type="text" class="input" required="" id="usuario" name="usuario">
        <label class="label">Usuario</label>
      </div>
      <div class="form_control">
        <input type="password" class="input" required="" id="password" name="password">
        <label class="label">Contraseña</label>
      </div>
      <button >Ingresar</button>

      <span class="bottom_text">¿No tienes una cuenta? <label for="register_toggle" class="swtich">Registrese</label> </span>
    </form>
    <form class="form">
      <span class="title">Registrarse</span>
      <div class="form_control">
        <input type="text" class="input" required="">
        <label class="label">Nombre de Usuario</label>
      </div>
      <div class="form_control">
        <input type="email" class="input" required="">
        <label class="label">Correo Electronico</label>
      </div>
      <div class="form_control">
        <input type="password" class="input" required="">
        <label class="label">Contraseña</label>
      </div>
      <button>Registrarse</button>

      <span class="bottom_text">¿Ya tienes una cuenta? <label for="register_toggle" class="swtich">Iniciar Sesión</label></span>
    </form>

    
    </div>
</div>

</body>
</html>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>

</body>
</html>





  