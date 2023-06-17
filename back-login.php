<?php
    session_start(); //Primero, iniciamos la sesión con session_start
?>
<?php
    //Luego, incluimos la conexión a la base de datos
    include ("conexion-db.php");
    //Después, nos traemos los datos del formulario con el método POST
    $user = $_POST['username'];
    $psw = $_POST['pswd'];
    //Enseguida, usaremos un contador para verificar si los usuarios existen en la tabla
    $query_count = "SELECT COUNT(*) AS buscador_users FROM tabla_users WHERE username = '$user' AND pswd = '$psw'";
    //Usaremos este script para ejecutar la sentencia SQL
    $result_count = mysqli_query($conector,$query_count) or die(mysqli_error($conector));
    //Luego, usaremos un arreglo para hacer el inicio de sesión funcional
    $array_count = mysqli_fetch_array($result_count) or die(mysqli_error($conector));
    //Vamos a utilizar el condicional para hacer la función del inicio de sesión
    if ($array_count['buscador_users']>0) {
        //Manejaremos el arreglo de SESSION para iniciar sesión
	    $_SESSION['username']=$user;
        //Usando el siguiente script ingresamos a la página principal
        echo "<script type='text/javascript'>
        window.location='inicio.php';
        </script>";
    } else {
        //Si los datos están incorrectos, mostraremos la siguiente alerta
        echo "<script type='text/javascript'>
        alert('Verifica tus credenciales de acceso'); window.location='index.php';
        </script>";
    }
?>