<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags requeridos del sitio -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título del sitio -->
    <title>Cadena de conexión a MySQL</title>
    <!-- Favicon del sitio -->
    <link rel="icon" href="img/base-de-datos.png" alt="favicon">
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap Icons 1.10.5 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="sb-nav-fixed" style="background-color: #F5F5F5;">
    <!-- Con el siguiente Back-end, realizamos la conexión a una base de datos local de MySQL -->
    <?php
        //Primero, definimos nuestras variables para la conexión
        $dbhost = "localhost";
	    $dbname = "dbshu2";
	    $dbuser = "root";
	    $dbpswd = "";

        //Utilizaremos el método de conexión mysqli para realizar la conexión a la base de datos local
	    $conector = new mysqli($dbhost,$dbuser,$dbpswd,$dbname);
        //Despúes, vamos a verificar que la conexión funcione correctamente
        if ($conector->connect_errno) {
            //Si la conexión tuvo un problema, mostraremos el siguiente mensaje
	    	echo "<h4 align='center' style='font-size:23px; margin-top:15px; margin-bottom:15px;'><strong>Lo sentimos, la conexión a la base de datos falló</strong></h4>";
	    	echo "<h5 align='center' style='font-size:23px; margin-top:15px; margin-bottom:15px;'><strong>Verifica tus credenciales de conexión</strong></h5>";
	    	echo "<center><img src='img/icono-tache.png' width='320px'></center><br>";
        } else {
            //Si la conexión se realizó corectamente, mostraremos el siguiente mensaje
            echo "<h4 align='center' style='font-size:23px; margin-top:15px; margin-bottom:15px;'><strong>La base de datos se conectó correctamente</strong></h4>";
            echo "<center><img src='img/db-success.png' width='320px'></center><br>";
        }
    ?>
    <!-- Bootstrap 5.3.0 JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
