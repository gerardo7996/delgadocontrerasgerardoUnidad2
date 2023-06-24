<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags requeridos del sitio -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Título del sitio -->
	<title>Mi Catálogo - Mis Productos</title>
	<!-- Favicon del sitio -->
    <link rel="icon" href="img/comercio-electronico2.png" alt="favicon">
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap Icons 1.10.5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

        .mt-5 h4 {
            font-size: 20px;
            color: #4A148C;
        }

        .icono-producto {
            width: 200px;
        }

        .container h5 {
            font-size: 20px;
            color: #4A148C;
        }
    </style>
</head>
<body class="sb-nav-fixed">
	<nav class="navbar">
        <h5 class="navbar-brand"><strong>Mi Catálogo</strong></h5>
        <a class="d-flex btn" href="inicio.php" style="margin-right: 25px; background-color: #4A148C; color: #FAFAFA; font-size: 18px; border-radius: 5%; cursor: pointer;"><i class="bi bi-backspace" style="margin-right: 7px;"></i><strong>Regresar</strong></a>
    </nav>
    <!-- Contenedor del apartado -->
    <div class="container mt-5">
    	<br>
		<center><img class="icono-producto" src="img/comercio-electronico.png"></center>
		<h4 class="mt-5" align="center"><strong>Mis Productos</strong></h4><hr>
        <h5 align="center"><strong>Dentro de esta sección se pueden ver todos los productos disponibles para todos nuestros clientes que desean comprarlos de nuestro catálogo virtual.</strong></h5><br>
    </div>
    <br>
    <?php
        //Incluimos la conexión a la base de datos
        include ("conexion-db.php");
        //Enseguida manejaremos la siguiente sentencia SQL
        $query = "SELECT * FROM tabla_productos";
        //Ejecutamos la sentencia SQL con el siguiente script
        $resultado = mysqli_query($conector,$query) or die(mysql_error($conector));
        //Enseguida, creamos un ciclo while para realizar la muestra de los datos
        while ($row = mysqli_fetch_assoc($resultado)):
    ?>
    <div class="col-3 d-inline-block" style="padding-bottom: 2%; margin-left: 5%;">
        <div class="card h-100" style="padding-bottom: 0%; margin-left: 7%;">
            <?php
                //Mandamos a llamar el ID y la imagen de cada producto
                $id_producto = $row['id_producto'];
                $imagen_bd = $row['imagen'];
                //Definimos la ruta de destina en donde se guarden las imágenes
                $imagen = "imagenes/" . $id_producto . "/" . $imagen_bd;

                //Si las imágenes no existen en la base de datos, vamos a manejar la siguiente condición utilzando la función file_exists
                if (!file_exists($imagen)) {
                    //Vamos a mostrar la siguiente imagen cuando no existe en la base de datos
                    $imagen = "img/no-hay-imagen.png";
                }
            ?>
            <!-- Definimos las variables de PHP del ID y la imagen de los producto -->
            <img src="<?php echo $imagen; ?>">
            <div class="card-body">
                <b style="color: #4A148C;"><strong>ID: </strong></b>  <?php echo $id_producto; ?><br>
                <b style="color: #4A148C;"><strong>Código: </strong></b>  <?php echo $row['codigo']; ?><br>
                <b style="color: #4A148C;"><strong>Descripción: </strong></b>  <?php echo $row['descripcion']; ?><br>
                <b style="color: #4A148C;"><strong>Precio: </strong></b>  <?php echo $row['precio']; ?><br>
                <b style="color: #4A148C;"><strong>Stock: </strong></b>  <?php echo $row['stock']; ?><br>
                <b style="color: #4A148C;"><strong>Fecha de Registro: </strong></b>  <?php echo $row['fecha_registro']; ?><br>
            </div> 
        </div>
    </div>
    <!-- Aquí vamos a cerrar el ciclo while -->
    <?php endwhile; ?> 
    <br><br><br>
	<!-- Bootstrap 5.3.0 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>