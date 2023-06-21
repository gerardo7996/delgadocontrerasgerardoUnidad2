<?php
    //Usaremos un condicional que tenga un isset para el envío del formulario
    if (isset($_POST['change-pswd'])) {
	    //Después, agregamos la conexión a la base de datos
	    include ("conexion-db.php");
	    //Luego, nos traemos los datos del formulario con el método POST
	    $password = $_POST['pswd'];
	    //Verificamos que las cajas no estén vacías
	    if (!empty($password)) {
		    //Manejaremos la siguiente sentencia SQL para actualizar las contraseñas
		    $sql_pswd = "UPDATE tabla_users SET pswd = '$password'";
		    //Enseguida, ejecutamos la consulta con el siguiente script
		    $res_pswd = mysqli_query($conector,$sql_pswd) or die(mysql_error($conector));
		    //Comprobamos si se actualizaron las contraseñas
		    if ($res_pswd) {
			    //Mostramos la siguiente notificación cuando ya se actualizó la contraseña con éxito
			    echo "<script type='text/javascript'> 
			        alert('La contraseña se restableció correctamente');
			        window.location='index.php'; 
			    </script>";
		    } else {
			    //Mostramos la siguiente notificación cuando ocurrió un error
			    echo "<script type='text/javascript'> 
			        alert('Surgió un error y la contraseña no se pudo restablecer');
			        window.location='reset-pswd.php'; 
			    </script>";
		    }	
	    }
    }
    //Usaremos el siguiente script para cerrar la conexión de la base de datos
    mysqli_close($conector);
?>