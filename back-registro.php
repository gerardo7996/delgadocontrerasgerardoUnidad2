<?php
    //Primero, incluimos la conexión a la base de datos
    include ("conexion-db.php");
    //Después, nos traemos los datos del formulario con el método POST
    $user = $_POST['username'];
    $email = $_POST['email'];
    $psw = $_POST['pswd'];
    //Enseguida definimos la IP del servidor del reCaptcha de Google
    $ip_server = $_SERVER['REMOTE_ADDR'];
    //Luego definimos con el método POST y el parametro response para hacer la validación del captcha
    $captcha = $_POST['g-recaptcha-response'];
    //Definimos la clave secreta en donde se debe interactuar el captcha
    $clave = "6Ldh854mAAAAAKlnYiXN0wZtEPx-jqm3cMpyZNMI";
    //Manejaremos el file_get_contents para enviar la petición para validar el captcha en donde manejaremos los parametros de secret, response y remoteip y la API de solicitud del reCaptcha de Google
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$clave&response=$captcha&remoteip=$ip_server");
    //Después, convertimos la respuesta en formato JSON para verificar el captcha
    $atributos = json_decode($response, TRUE);
    //Luego, verificamos la validación de la variable $atributos para ver si da igual a true o false
    if (!$atributos['success']) {
        //Si la variable $atributos indica false, mostramos la siguiente alerta
        echo "<script type='text/javascript'>
        alert('Verifica el captcha'); window.location='index.php';
        </script>";
    //En caso de que la variable $atributos indica true, se procede con el registro del usuario    
    } else {
        //Manejaremos la siguiente sentencia SQL para insertar los datos a la tabla
        $query = "INSERT INTO tabla_users (username, email, pswd, estatus) VALUES ('$user', '$email', '$psw', 1)";
        //Ejecutamos la sentencia SQL con el siguiente script
        $resultado = mysqli_query($conector,$query) or die(mysqli_error($conector));
        //Verificamos si se registraron los usuarios
        if ($resultado) {
            //Mostranos la siguiente alerta cuando se realizó el registro correctamente
            echo "<script type='text/javascript'>
            alert('El usuario fue registrado con éxito'); window.location='index.php';
            </script>";
        } else {
            //Si sucede un error, mostramos la siguiente alerta
            echo "<script type='text/javascript'>
            alert('Surgió un error y el usuario no pudo ser registrado'); window.location='index.php';
            </script>";
        }    
    }    
    //Usaremos el siguiente script para cerrar la conexión de la base de datos
    mysqli_close($conector);
?>