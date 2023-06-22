<?php
    session_start(); //Iniciamos la sesión en esta sección del sitio
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags requeridos del sitio -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título del sitio -->
    <title>Mi Catálogo - Página Principal</title>
    <!-- Favicon del sitio -->
    <link rel="icon" href="img/pagina-principal.png" alt="favicon">
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

        h4 {
            font-size: 20px;
            color: #4A148C;
        }

        h5 {
            font-size: 20px;
            color: #4A148C;
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

        .icono-home {
            width: 250px;
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg" style="background-color: #D500F9;">
        <div class="container-fluid">
            <span class="navbar-brand" style="color: #4A148C; margin-left: 7px;"><strong>Mi Catálogo</strong></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inicio.php" style="color: #4A148C;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nuevo-producto.php" style="color: #4A148C;">Nuevo Producto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #4A148C;">
                            Más opciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="mis-productos.php" style="color: #4A148C;">Mis Productos</a></li>
                            <li><a class="dropdown-item" href="detalle-productos.php" style="color: #4A148C;">Detalles de Productos</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="d-flex btn" href="back-logout.php"><i class="bi bi-backspace" style="margin-right: 7px;"></i><strong>Cerrar Sesión</strong></a>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- Carrusel de imágenes para las transiciones -->
    <center><img class="icono-home" src="img/pagina-inicio.png"></center>
    <h4 class="mt-5" align="center"><strong>Página principal</strong></h4><hr>
    <h4 align="center"><strong>¡Bienvenido a nuestro catálogo virtual: <?php echo $_SESSION['username']; ?>!</strong></h4><br>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/catalogo-tecnologia.jpg" class="rounded mx-auto d-block" alt="..." style="width: 600px;">
            </div>
            <div class="carousel-item">
                <img src="img/catalogo-productos.png" class="rounded mx-auto d-block" alt="..." style="width: 600px;">
            </div>
            <div class="carousel-item">
                <img src="img/nuevo-catalogo-productos.jpg" class="rounded mx-auto d-block" alt="..." style="width: 600px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <br><br>
    <!-- Contenedor del aparado -->
    <div class="mt-5">
        <h5 align="center"><strong>Damos la bienvenida a todos nuestros clientes, nuestro nuevo catálogo virtual de productos.<br>Donde mostramos una gran cantidad de varios productos que nuestros clientes buscan y desean comprar de nuestra tienda.</strong></h5><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/nuevo-producto2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center"><strong>Llegada de nuevos productos</strong></h5>
                        <p class="card-text">Les notificamos la llegada de nuevos productos a nuestro catálogo virtual a todos nuestros clientes para que busquen lo que necesitan.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/oferta.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center"><strong>Las grandes ofertas para todos nuestros productos</strong></h5>
                        <p class="card-text">Nuestra tienda puede llegar aplicar las grandes ofertas de todos nuestros productos para ti y para nuestros clientes dentro de nuestro catálogo virtual.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/promociones.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center"><strong>Nuevas promociones para todos nuestros productos</strong></h5>
                        <p class="card-text">Ofrecemos a nuestros clientes, las grandes promociones para sus productos que deseen elegir y comprar dentro de nuestro catálogo virtual.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!-- Bootstrap 5.3.0 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>