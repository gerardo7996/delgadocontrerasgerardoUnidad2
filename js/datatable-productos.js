//Mediante uso de este script de JavaScript
//vamos a generar la DataTable de la tabla de productos
let tabla_productos = new DataTable('#tabla_productos');

$(document).ready(function(){
	$('#tabla_productos').DataTable();
});