<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tagos requeridos del sitio -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título del sitio -->
    <title>- Registro e Inicio de Sesión</title>
    <!-- Favicon del sitio -->
    <link rel="icon" href="img/" alt="favicon">
    <!-- Librería de jQuery-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Librería de SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- API de reCaptcha v2 de Google con JavaScript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Bootstrap Icons 1.10.5 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Estilos del sitio -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form action="back-registro.php" method="POST">
                <div class="header">Registro</div>
                <div class="socials-wrapper">
                    <header>
                        <h3>Registro del usuario</h3>
                    </header>
                </div>
                <div class="button-input-group">
                    <div class="group input-group">
                        <input id="username" type="text" name="username" placeholder="Usuario">
                    </div>
                    <div class="group input-group">
                        <input id="email" type="email" name="email" placeholder="Correo Electronico">
                    </div>
                    <div class="group input-group">
                        <input id="pswd" type="password" name="pswd" placeholder="Nueva Contraseña">
                    </div>
                    <div class="group input-group">
                        <input id="pswd2" type="password" name="pswd2" placeholder="Confirmar Contraseña">
                    </div>
                    <div class="group input-group">
                        <div class="g-recaptcha" data-sitekey="6Ldh854mAAAAAGptnEazvMTFalrHfb3537OAuTJ-"></div>
                    </div>
                    <br>
                    <div class="group input-group">
                        <button class="signup-btn" type="submit" name="registrar" id="registrar">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="form-container login-container">
            <form action="back-login.php" method="POST">
                <div class="header">Iniciar Sesión</div>
                <div class="socials-wrapper">
                    <ul>
                        <li><a href="#" class="facebook"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#" class="google"><i class="bi bi-google"></i></a></li>
                        <li><a href="#" class="twitter"><i class="bi bi-twitter"></i></a></li>
                    </ul>
                    <header>
                        <h3>Inicio de sesión del usuario</h3>
                    </header>
                </div>
                <div class="button-input-group">
                    <div class="group input-group">
                        <input id="username" type="text" name="username" placeholder="Usuario">
                    </div>
                    <div class="group input-group">
                        <input id="pswd" type="password" name="pswd" placeholder="Contraseña">
                    </div>
                    <div class="group input-group">
                        <button class="signin-btn" type="submit" name="login" id="login">Inicia Sesión</button>
                    </div>
                    <div class="form-link forgot">
                        <a href="#" class="login-link">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¡Bienvenido de regreso!</h1>
                    <p>¿Ya tienes una cuenta? Inicia sesión</p>
                    <div class="group input-group">
                        <button class="trigger" id="login-btn">Iniciar Sesión</button>
                    </div>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Bienvenido a nuestro sitio web!</h1>
                    <p>¿Aún no tienes una cuenta?, ¡Registrate!</p>
                    <div class="group input-group">
                        <button class="trigger" id="register">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Script para el funcionamiento del formulario animado -->
    <script type="text/javascript" src="js/formulario.js"></script>
</body>
</html>
<!-- Primer script para la validación del formularios de registro -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#registrar').click(function(){
            if ($('#username').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo de usuario vacio',
                    text: 'Por favor, ingresa un nombre de usuario',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#email').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo de correo vacio',
                    text: 'Por favor, ingresa un correo electronico',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#pswd').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Contraseña incompleta',
                    text: 'Por favor, ingresa una contraseña',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false; 
            } else if ($('#pswd2').val() !== $('#pswd').val() || "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'error',
                    title: 'Contraseña incorrecta',
                    text: 'Las contraseñas no coinciden, vuelve a confirmar tu contraseña',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            }
        });
    });
</script>
<!-- Segundo script para la validación del formularios del login -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#login').click(function(){
            if ($('#username').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo de usuario vacio',
                    text: 'Por favor, ingresa tu nombre de usuario',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#pswd').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Contraseña incompleta',
                    text: 'Por favor, ingresa tu contraseña',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            }
        });
    });
</script>