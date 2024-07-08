// convertor plata
var dolar = document.getElementById("dolar");

var peso = document.getElementById("peso");

const cambio = document.getElementById("cambio");

dolar.addEventListener("input", function(){

    const inputValue = parseFloat(dolar.value);
    const clp = 980.39 * inputValue;

    if (!isNaN(clp)) {
        peso.value = clp.toPrecision();
    } else {
        peso.value = "";
    }

});




cambio.addEventListener('click', function toggleInput(){

    if (peso.ariaReadOnly == true) {

        peso.ariaReadOnly = false;
        dolar.ariaReadOnly = true;
    }
    if (dolar.ariaReadOnly == true) {
        
        peso.ariaReadOnly = true;
        dolar.ariaReadOnly = false;

    } else {
        console.log("error")
    }

});


peso.addEventListener("input", function(){

    const inputValue = parseFloat(peso.value);
    const us = 0.0011 * inputValue;

    if (!isNaN(us)) {
        dolar.value = us.toPrecision(2);
    } else {
        dolar.value = "";
    }

});


// convertor medidas

var inch = document.getElementById("inch");

var cm = document.getElementById("cm");

inch.addEventListener("input", function(){

    const inputValue2 = parseFloat(inch.value);
    const cm2 = 2.54 * inputValue2;

    if (!isNaN(cm2)) {
        cm.value = cm2.toPrecision();
        console.log("valor");
    } else {
        cm.value = "";
    }

});

cm.addEventListener("input", function(){

    const inputValue2 = parseFloat(cm.value);
    const inches = 0.39370079 * inputValue2;

    if (!isNaN(inches)) {
        inch.value = inches.toPrecision();
        console.log("valor");
    } else {
        inch.value = "";
    }

});