//Popup
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
overlay = document.getElementById('overlay'),
popup = document.getElementById('popup'),
btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
    overlay.classList.add('active')
    popup.classList.add('active')
});

btnCerrarPopup.addEventListener('click', function(){
    overlay.classList.remove('active')
    popup.classList.remove('active')
});

//Animaciones
ScrollReveal().reveal('.main', {
    duration:3000,
    origin: 'right',
    distance: '-100px',
});


ScrollReveal().reveal('.animation-como', {
    duration:3000,
    origin: 'bottom',
    distance: '-100px'
});

ScrollReveal().reveal('.animation-soluciones', {
    duration:4000,
    origin: 'left',
    distance: '-100px'
});

ScrollReveal().reveal('.animation-contacto', {
    duration:4000,
    origin: 'top',
    distance: '-100px'
});