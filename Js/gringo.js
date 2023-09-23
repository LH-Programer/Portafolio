
var dolar = document.getElementById("dolar");

var peso = document.getElementById("peso");

const cambio = document.getElementById("cambio");

dolar.addEventListener("input", function(){

    const inputValue = parseFloat(dolar.value);
    const clp = 844 * inputValue;

    if (!isNaN(clp)) {
        peso.value = clp.toFixed();
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
    const us = 0.0012 * inputValue;

    if (!isNaN(us)) {
        dolar.value = us.toFixed(2);
    } else {
        dolar.value = "";
    }

});



