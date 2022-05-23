//slider//

var slide = new Array('', '', '')
var numero = 0

function ChangeSlide(sens) {
    numero = numero + sens
    if (numero < 0) numero = slide.length - 1
    if (numero > slide.length - 1) numero = 0
    document.getElementById('slide').src = slide[numero]
}

//fin slider//
