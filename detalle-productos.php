<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags requeridos del sitio -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Título del sitio -->
	<title>Mi Catálogo - Detalles de Productos</title>
	<!-- Favicon del sitio -->
    <link rel="icon" href="img/producto.png" alt="favicon">
	<!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CDN de DataTable para Bootstrap 5.2.0 de CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <!-- CDN de DataTable de Bootstrap 5 para CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
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

        .container h5 {
            font-size: 20px;
            color: #4A148C;
        }

        .logo-productos {
            width: 200px;
        }

        thead {
            background-color: #D500F9;
            color: #4A148C;
        }

        td {
            color: black;
        }
    </style>
</head>
<body class="sb-nav-fixed">
	<nav class="navbar">
        <h5 class="navbar-brand"><strong>Mi Catálogo</strong></h5>
        <a class="d-flex btn" href="inicio.php" style="margin-right: 25px; background-color: #4A148C; color: #FAFAFA; font-size: 18px; border-radius: 5%;"><i class="bi bi-backspace" style="margin-right: 7px;"></i><strong>Regresar</strong></a>
    </nav>
    <!-- Contenedor del apartado -->
    <div class="container mt-5">
    	<br>
		<center><img class="logo-productos" src="img/productos.png"></center>
		<h4 class="mt-5" align="center"><strong>Detalles de Productos</strong></h4><hr>
        <h5 align="center"><strong>Dentro de esta sección, nuestros clientes podrán ve con más información detallada sobre todos sus productos favoritos de nuestro catálogo virtual.</strong></h5>
    </div><br>
    <!-- Contenedor de la tabla -->
    <div class="table-responsive">
        <table id="tabla_productos" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID_Producto</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Fecha de Registro</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
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
                <?php
                    //Mandamos a llamar el ID y la imagen de cada producto
                    $id_producto = $row['id_producto'];
                    $imagen_bd = $row['imagen'];
                    //Definimos la ruta de destina en donde se guarden las imágenes
                    $imagen = "imagenes/" . $id_producto . "/" . $imagen_bd;

                    //Si las imágenes no existen en la base de datos, vamos a manejar la siguiente condición utilizando la función file_exists
                    if (!file_exists($imagen)) {
                        //Vamos a mostrar la siguiente imagen cuando no existe en la base de datos
                        $imagen = "img/no-hay-imagen.png";
                    }
                ?>
                <!-- Ahora, mandamos a llamar la variable $row para llenar la tabla del sitio con los datos de la tabla de la BD y agregar las variables del ID y las imágenes de los productos -->
                <tr>
                    <td><?php echo $id_producto; ?></td>
                    <td><?php echo $row['codigo']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><?php echo $row['fecha_registro']; ?></td>
                    <td><img src="<?php echo $imagen; ?>" width="100px" height="100px"></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <br><br>
	<!-- Bootstrap 5.3.0 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Librería de JavaScript para jQuery 3.5.1 -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Librería de DataTable para jQuery de JavaScript -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- Librería de DataTable para Bootstrap 5 de JavaScript -->
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
<!-- Script para generar las DataTables para la tabla de productos -->
<script type="text/javascript" src="js/datatable-productos.js"></script>