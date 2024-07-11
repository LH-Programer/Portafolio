//contraseña
document.addEventListener('DOMContentLoaded', function() {
    console.log('Js Cargado');
    
    var showPassword = document.getElementById('show-password');
    var hidePassword = document.getElementById('hide-password');
    var passwordField = document.getElementById('password');
    var passwordField2 = document.getElementById('password2');

    
    showPassword.addEventListener('click', function (e) {
        e.preventDefault();
        console.log('mostrar password');
        passwordField.type = 'text';
        passwordField2.type = 'text';
        showPassword.style.display = 'none';
        hidePassword.style.display = 'block';
    });

    hidePassword.addEventListener('click', function (e) {
        e.preventDefault();
        console.log('no mostrar clicked');
        passwordField.type = 'password';
        passwordField2.type = 'password';
        hidePassword.style.display = 'none';
        showPassword.style.display = 'block';
    });
});

//animaciones
ScrollReveal().reveal('.animation', {
    duration:2000,
    origin: 'bottom',
    distance: '-100px',
});