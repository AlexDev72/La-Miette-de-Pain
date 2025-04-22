//slider//
var slide1 = "/upload/images/Slider/mariage/{{ mariage.image }}"
var slide = new Array("./image/vitrinepatisserie.jpg", "./image/vitrinepatisserie2.jpg", "./image/vitrinepatisserie3.jpg" );
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}
setInterval("ChangeSlide(1)", 10000);

function ChangeSlide1(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide1.length - 1;
    if (numero > slide1.length - 1)
        numero = 0;
    document.getElementById("slide1").src = slide1[numero];
}
setInterval("ChangeSlide1(1)", 10000);
//fin slider//
 // Ajout d'une ombre quand on scroll
 window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 10) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });