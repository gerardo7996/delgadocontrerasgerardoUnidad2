<?php
//Primero, iniciamos la sesión con session_start()
session_start();
//Para cerrar la sesión por completo usaremos el session_destroy() para destruir la sesión por completo
session_destroy();
//Manejaremos el siguiente script para volver al login
echo "<script type='text/javascript'> window.location='index.php'; </script>"; 
?>