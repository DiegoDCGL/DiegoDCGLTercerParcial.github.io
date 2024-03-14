
document.addEventListener("DOMContentLoaded", function(){
    var form = document.getElementById('loginForm');
    

    form.addEventListener('submit', function(event) {
        var inputEmail = document.getElementById('email');
        var inputPassword = document.getElementById('password');
        var validEmail = /^\w+([.-_+]?\w+)@\w+([.-]?\w+)(\.\w{2,10})+$/;

        if (!validEmail.test(inputEmail.value.trim())) {
            alert('Por favor, introduce un correo electrónico válido');
            event.preventDefault(); // Evita el envío del formulario por defecto
        } else if (!inputEmail.value.includes('@')) {
            alert('El correo electrónico debe contener al menos un "@"');
            event.preventDefault(); // Evita el envío del formulario por defecto
        } else if (inputPassword.value.length < 8) {
            alert('La contraseña debe tener al menos 8 caracteres');
            event.preventDefault(); // Evita el envío del formulario por defecto
        }

    });

}); 