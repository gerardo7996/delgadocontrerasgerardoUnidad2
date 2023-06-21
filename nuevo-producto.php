<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags requeridos del sitio -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Título del sitio -->
	<title>Mi Catálogo - Nuevo Producto</title>
	<!-- Favicon del sitio -->
    <link rel="icon" href="img/nuevo-producto.png" alt="favicon">
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap 1.10.5 CSS -->
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

        .form-group input[type="text"],
        .form-group input[type="file"] {
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

        .logo-agregar-producto {
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
<!-- Cuerpo del formulario de registro de productos -->
<body class="sb-nav-fixed">
	<nav class="navbar">
        <h5 class="navbar-brand"><strong>Mi Catálogo</strong></h5>
        <a class="d-flex btn" href="inicio.php" style="margin-right: 25px;"><i class="bi bi-backspace" style="margin-right: 7px;"></i><strong>Regresar</strong></a>
    </nav>
    <!-- Contenedor del formulario para subir productos nuevos -->
    <div class="container mt-5">
    	<br>
    	<center><img class="logo-agregar-producto" src="img/agregar-producto.png"></center>
    	<h4 class="mt-5" align="center"><strong>Nuevo Producto</strong></h4><hr>
    	<form action="back-guardar-producto.php" method="POST" enctype="multipart/form-data">
    		<div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="codigo"><strong>Código</strong></label>
                        <input id="codigo" class="form-control" type="text" name="codigo" placeholder="Ingresa el codigo del producto">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="descripcion"><strong>Descripción</strong></label>
                        <input id="descripcion" class="form-control" type="text" name="descripcion" placeholder="Ingresa la descripción del producto">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="precio"><strong>Precio</strong></label>
                        <input id="precio" class="form-control" type="text" name="precio" placeholder="Ingresa el precio del producto">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="stock"><strong>Stock</strong></label>
                        <input id="stock" class="form-control" type="text" name="stock" placeholder="Ingresa el stock del producto">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="imagen"><strong>Imagen</strong></label>
                        <input id="imagen" class="form-control" type="file" name="imagen">
                    </div>
                </div>
            </div>
    		<br>
    		<!-- Botón para enviar las imágenes a la base de datos -->
    		<center>
				<button class="btn" type="submit" name="enviar-imagen" id="enviar-imagen"><i class="bi bi-save-fill">  </i><strong>Subir Producto</strong></button>  <button class="btn" type="reset" name="clean" id="clean"><i class="bi bi-trash">  </i><strong>Limpiar formulario</strong></button><br>
			</center>
			<br>
    	</form>
    </div>
    <br><br>
    <!-- Bootstrap 5.3.0 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<!-- Script para validar la subida de los productos -->
<script type="text/javascript" src="js/validar-subida.js"></script>