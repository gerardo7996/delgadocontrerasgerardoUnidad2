<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags requeridos del sitio -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título del sitio -->
    <title>Mi Catálogo - Registro e Inicio de Sesión</title>
    <!-- Favicon del sitio -->
    <link rel="icon" href="img/user-icon.png" alt="favicon">
    <!-- Librería de jQuery-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Librería de SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Librería de SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- API de reCaptcha v2 de Google con JavaScript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Bootstrap Icons 1.10.5 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Estilos del sitio -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<!-- Cuerpo del formulario de registro y login -->
<body>
    <!-- Contenedor de los formularios de registro y login -->
    <div class="container" id="container">
        <!-- Contenedor del formulario de registro -->
        <div class="form-container register-container">
            <!-- Formulario de registro de usuarios -->
            <form action="back-registro.php" method="POST">
                <div class="header">Mi Catálogo</div>
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
        <!-- Contenedor del formulario de login -->
        <div class="form-container login-container">
            <!-- Formulario de inicio de sesión -->
            <form action="back-login.php" method="POST">
                <div class="header">Mi Catálogo</div>
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
                        <a href="reset-pswd.php" class="login-link">¿Olvidaste tu contraseña?</a>
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
<!-- Primer script para validación del formulario de registro -->
<script type="text/javascript" src="js/registro.js"></script>
<!-- Segundo script para la validación del formulario del login -->
<script type="text/javascript" src="js/login.js"></script>