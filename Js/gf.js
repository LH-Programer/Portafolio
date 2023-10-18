//Popup

//Primer paso
var btnAbrirPopup1 = document.getElementById('btn-abrir-popup1'),
overlay1 = document.getElementById('overlay1'),
popup1 = document.getElementById('popup1'),
btnCerrarPopup1 = document.getElementById('btn-cerrar-popup1');

btnAbrirPopup1.addEventListener('click', function(){
    overlay1.classList.add('active')
    popup1.classList.add('active')
});

btnCerrarPopup1.addEventListener('click', function(){
    overlay1.classList.remove('active')
    popup1.classList.remove('active')
});

//boton no

var btnNo = document.getElementById('button-no');

btnNo.addEventListener('click', function(){
    alert("Wrong answer, Try it again");
});

var btnNo1 = document.getElementById('button-no1');

btnNo1.addEventListener('click', function(){
    alert("Try again, i know you can do it");
});

var btnNo2 = document.getElementById('button-no2');

btnNo2.addEventListener('click', function(){
    alert("Okay... one more time, Try it again");
});



//Segundo paso
var btnAbrirPopup2 = document.getElementById('btn-abrir-popup2'),
overlay2 = document.getElementById('overlay2'),
popup2 = document.getElementById('popup2'),
btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');

btnAbrirPopup2.addEventListener('click', function(){
    overlay2.classList.add('active')
    popup2.classList.add('active')
});

btnCerrarPopup2.addEventListener('click', function(){
    overlay2.classList.remove('active')
    popup2.classList.remove('active')
});

