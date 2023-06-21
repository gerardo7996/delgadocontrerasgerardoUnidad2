<?php
    //Primero, incluimos la conexión a la base de datos
    require_once ('conexion-db.php');
    //Nos traemos los datos del formulario
    $codigo = $_POST['codigo'];
    $desc = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    //Luego, definimos las características de las imágenes
    $imagen = $_FILES['imagen']['name'];
    $tipo_img = $_FILES['imagen']['type'];
    $tamaño_img = $_FILES['imagen']['size'];
    $temp_img = $_FILES['imagen']['tmp_name'];
    //Ahora, definimos el directorio en donde se guardaran las imágenes
    $directorio_img = "imagenes/".$imagen;
    //Con la siguiente función, realizamos el movimiento de las imágenes al directorio creado
    move_uploaded_file($temp_img, $directorio_img);
    //Definimos el formato de la fecha de subida de las imágenes
    $fecha_subida = date("Y-m-d H:i:s");
    //Manejaremos la siguiente sentencia SQL para insertar los datos a la tabla
    $query_img = "INSERT INTO tabla_productos (codigo, descripcion, precio, stock, fecha_registro, imagen) VALUES ('$codigo','$desc','$precio','$stock','$fecha_subida','$imagen')";
    //Ejecutamos la sentencia SQL con el siguiente script
    $res_img = mysqli_query($conector,$query_img) or die(mysql_error($conector));
    //Verificamos si se registraron los productos
    if ($res_img) {
    	//Mostranos la siguiente alerta cuando se realizó el registro correctamente
        echo "<script type='text/javascript'>
            alert('El producto se subió correctamente');
            window.location='nuevo-producto.php';
        </script>";
    } else {
    	//Si sucede un error, mostramos la siguiente alerta
        echo "<script type='text/javascript'>
            alert('Surgio un error al subir el producto');
            window.location='nuevo-producto.php';
        </script>";
    }
    //Usaremos el siguiente script para cerrar la conexión de la base de datos
    mysqli_close($conector);
?>