//Mediante este código de JavaScript realizamos la validación
//del formulario del login
$(document).ready(function(){
    $('#login').click(function(){
        if ($('#username').val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
            })
            Swal.fire({
                icon: 'warning',
                title: 'Campo de usuario vacio',
                text: 'Por favor, ingresa tu nombre de usuario',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        } else if ($('#pswd').val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
            })
            Swal.fire({
                icon: 'warning',
                title: 'Contraseña incompleta',
                text: 'Por favor, ingresa tu contraseña',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        }
    });
});