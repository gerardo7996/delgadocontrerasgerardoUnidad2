//Mediante este primer código de JavaScript realizamos la validación
//del formulario de registro
$(document).ready(function(){
    $('#registrar').click(function(){
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
                text: 'Por favor, ingresa un nombre de usuario',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        } else if ($('#email').val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
            })
            Swal.fire({
                icon: 'warning',
                title: 'Campo de correo vacio',
                text: 'Por favor, ingresa un correo electronico',
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
                text: 'Por favor, ingresa una contraseña',
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
                title: 'Contraseña incorrecta',
                text: 'Las contraseñas no coinciden, vuelve a confirmar tu contraseña',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        }
    });
});