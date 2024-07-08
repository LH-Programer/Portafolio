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
ScrollReveal().reveal('.name', {
    duration:3000,
    origin: 'bottom',
    distance: '-100px'
});

ScrollReveal().reveal('.info', {
    duration:3000,
    origin: 'bottom',
    distance: '-100px'
});

ScrollReveal().reveal('.flex-item', {
    duration:3000,
    origin: 'left',
    distance: '400px'
});

ScrollReveal().reveal('.flex-item2', {
    duration:3000,
    origin: 'right',
    distance: '400px'
});

ScrollReveal().reveal('.flex-item3', {
    duration:3000,
    origin: 'left',
    distance: '400px'
});

ScrollReveal().reveal('.flex-item4', {
    duration:3000,
    origin: 'right',
    distance: '400px'
});

ScrollReveal().reveal('.title', {
    duration:3000,
    origin: 'top',
    distance: '400px'
});


  
  

