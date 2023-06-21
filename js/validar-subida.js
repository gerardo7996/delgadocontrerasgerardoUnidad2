//Mediante este código de JavaScript realizamos la validación
//del formulario de subida de imágenes
$(document).ready(function(){
    $('#enviar-imagen').click(function(){
        if ($('#codigo').val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
            })
            Swal.fire({
                icon: 'warning',
                title: '¡Código Vacío!',
                text: '¡Ingresa el código del producto!',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        } else if ($('#descripcion').val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
            })
            Swal.fire({
                icon: 'warning',
                title: '¡Descripción Vacía!',
                text: '¡Ingresa la descripción del producto!',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        } else if ($('#precio').val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
            })
            Swal.fire({
                icon: 'warning',
                title: '¡Precio Vacío!',
                text: '¡Ingresa el precio del producto!',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        } else if ($('#stock').val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
            })
            Swal.fire({
                icon: 'warning',
                title: '¡Stock Vacío!',
                text: '¡Ingresa el stock del producto!',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        } else if (condition) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
            })
            Swal.fire({
                icon: 'warning',
                title: '¡Imagen no seleccionada!',
                text: '¡Selecciona una imagen de un rroducto!',
                showConfirmButton: true,
                confirmButtonColor: '#0091EA',
                confirmButtonText: 'Aceptar'
            })
            return false;
        }
    });
});