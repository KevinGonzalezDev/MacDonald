
var boton = document.getElementById('hamburger-icon');
var opciones = document.getElementsByClassName('mobile-menu-options')

boton.addEventListener('click', Intercalar);


var counter = 0;


function Intercalar(){
    counter++;

    if(counter == 0){
        opciones[0].className += ' mobile-menu-options-show';
    }

    if(counter == 1){
        opciones[0].className = 'mobile-menu-options';
        counter = -1;
    }
}