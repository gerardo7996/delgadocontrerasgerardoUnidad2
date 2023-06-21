//Mediante este código de JavaScript realizamos la validación
//del formulario de cambio de contraseña
$(document).ready(function(){
	$('#change-pswd').click(function(){
		if ($('#pswd').val() == "") {
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 1000,
				timerProgressBar: false,
		 	})
			Swal.fire({
				icon: 'warning',
				title: '¡Contraseña incompleta!',
			    text: 'Por favor, escribe tu nueva contraseña',
				showConfirmButton: true,
				confirmButtonColor: '#0091EA',
				confirmButtonText: 'Aceptar'
			})
			return false;
		} else if ($('#pswd2').val() !== $('#pswd').val() || "") {
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 1000,
				timerProgressBar: false,
			})
			Swal.fire({
				icon: 'error',
				title: '¡Contraseña incorrecta!',
			    text: 'Las contraseñas no coinciden, vuelve a confirmar tu contraseña',
				showConfirmButton: true,
				confirmButtonColor: '#0091EA',
				confirmButtonText: 'Aceptar'
			})
			return false;
		}
	});
});