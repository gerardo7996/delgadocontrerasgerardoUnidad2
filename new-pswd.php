<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Catálogo - Cambio de Contraseña</title>
    <!-- Favicon del sitio -->
	<link rel="icon" href="img/new-pswd.png" alt="favicon">
	<!-- Bootstrap 5.3.0 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap Icons 1.10.5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Librería de jQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Librería de SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Estilos de la página -->
    <style type="text/css">
        * {
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
        }

        .navbar {
            background-color: #D500F9;
        }

        .navbar h5 {
            font-size: 26px;
            color: #4A148C;
            margin-left: 25px;
        }

        h4 {
            font-size: 20px;
            color: #4A148C;
        }

        .form-group input[type="password"] {
            border-color: #01579B;
            border-radius: 6px;
            font-size: 16px;
            margin-bottom: 6px;
        }

        .container {
            border-style: groove;
            border-color: #4A148C;
            background-color: #D500F9;
            border-radius: 12px;
        }

        .new-pswd-icon {
            width: 200px;
        }

        .btn {
            background-color: #4A148C;
            color: #FAFAFA;
            font-size: 18px;
            border-radius: 5%;
        }

        .btn:hover {
            background-color: #AA00FF;
            cursor: pointer;
            color: #6A1B9A;
        }

        h5 {
            font-size: 20px;
            color: #4A148C;
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <nav class="navbar">
        <h5 class="navbar-brand"><strong>Mi Catálogo</strong></h5>
    </nav>
    <!-- Formulario para modificar la contraseña -->
    <div class="container mt-5">
        <br>
        <center><img class="new-pswd-icon" src="img/restablecer-contrasena.png"></center>
        <h4 class="mt-5" align="center"><strong>Cambiar contraseña</strong></h4><hr>
        <form action="back-change-pswd.php" method="POST">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="pswd"><strong>Nueva contraseña</strong></label>
                        <input id="pswd" class="form-control" type="password" name="pswd" placeholder="Ingresa una contraseña nueva">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="pswd2"><strong>Confirmar contraseña</strong></label>
                        <input id="pswd2" class="form-control" type="password" name="pswd2" placeholder="Confirma tu contraseña">
                    </div>
                </div>
            </div>
            <br>
            <!-- Botón para cambiar la contraseña -->
            <center>
                <button class="btn" type="submit" name="change-pswd" id="change-pswd"><i class="bi bi-send">  </i><strong>Cambiar contraseña</strong></button>  <button class="btn" type="reset" name="clean" id="clean"><i class="bi bi-trash">  </i><strong>Limpiar formulario</strong></button><br>
            </center>
            <br>
        </form>
    </div>
    <br><br>
    <!-- Bootstrap 5.3.0 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<!-- Script para validar los campos de las contraseñas -->
<script type="text/javascript" src="js/change-pswd.js"></script>