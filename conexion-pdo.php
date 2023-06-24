<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags requeridos del sitio -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Título del sitio -->
    <title>Mi Catálogo - Cadena de conexión a MySQL con PDO</title>
    <!-- Favicon del sitio -->
    <link rel="icon" href="img/base-de-datos.png" alt="favicon">
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap Icons 1.10.5 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="sb-nav-fixed" style="background-color: #F5F5F5;">
    <!-- Usaremos el siguiente Backend para hacer la conexión por el método PDO -->
    <?php
        //Nos Traemos los datos para la conexión
        $db_username = "root";
        $db_password = "";
        //Manejaremos el try catch para controlar las excepciones
        try {
            //Ahora, creamos el objeto de conexión para conectarse a la base de datos
            $conPDO = new PDO("mysql:host=localhost;dbname=dbshu2", $db_username, $db_password);
        } catch (PDOException $ex) {
            //Mostramos el siguiente mensaje cuando ocurrió una excepción al conectar
            echo "<h4 align='center' style='font-size:23px; color:#4A148C; margin-top:15px; margin-bottom:15px;><strong>Surgio el siguiente error al conectar a la base de datos: " . $ex->getMessage() . "</strong></h4><br>";
            echo "<center><img src='img/icono-tache.png' width='320px'></center><br>";
        }
    ?>
</body>
</html>