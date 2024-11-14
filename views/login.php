<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <style>
     .container {
    background-color: white; /* Fondo blanco */
    width: 300px;
    position: relative;
    border-radius: 5px;
    overflow: hidden;
    color: black; /* Texto negro */
    box-shadow: 1.5px 1.5px 3px rgba(0, 0, 0, 0.1), -1.5px -1.5px 3px rgba(95, 94, 94, 0.25), inset 0px 0px 0px rgba(0, 0, 0, 0.1), inset 0px -0px 0px rgba(95, 94, 94, 0.25);
}
body{
    background-color: black;
}
.container .slider {
    width: 200%;
    position: relative;
    transition: transform ease-out 0.3s;
    display: flex;
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
    padding: 1.5em 3em;
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
    font-size: 0.75em;
    user-select: none;
    pointer-events: none;
    color: black; /* Etiquetas en negro */
}

form .form_control .input {
    width: 100%;
    background-color: transparent;
    border: 2px solid black; /* Bordes negros */
    outline: none;
    color: black; /* Texto negro */
    padding: 0.5rem;
    font-size: 0.75rem;
    border-radius: 5px;
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

form button {
    width: 100%;
    background-color: black; /* Fondo negro */
    border: none;
    outline: none;
    color: white; /* Texto blanco */
    padding: 0.5rem;
    font-size: 0.75rem;
    border-radius: 5px;
    transition: box-shadow ease 0.1s;
    box-shadow: 1.5px 1.5px 3px rgba(0, 0, 0, 0.1), -1.5px -1.5px 3px rgba(95, 94, 94, 0.25), inset 0px 0px 0px rgba(0, 0, 0, 0.1), inset 0px -0px 0px rgba(95, 94, 94, 0.25);
}

form button:active {
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(95, 94, 94, 0.25), inset 3px 3px 4px rgba(0, 0, 0, 0.1), inset -3px -3px 4px rgba(95, 94, 94, 0.25);
}

.bottom_text {
    font-size: 0.65em;
}

.bottom_text .swtich {
    font-weight: 700;
    cursor: pointer;
    color: black; /* Texto en negro */
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
        <label class="label">Username</label>
      </div>
      <div class="form_control">
        <input type="email" class="input" required="">
        <label class="label">Email</label>
      </div>
      <div class="form_control">
        <input type="password" class="input" required="">
        <label class="label">Password</label>
      </div>
      <button>Sign Up</button>

      <span class="bottom_text">Already have an account? <label for="register_toggle" class="swtich">Sign In</label> </span>
    </form>

    
    </div>
</div>

</body>
</html>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>

</body>
</html>





  