

// Contact


//Materialize Initialization

(function($) {
  $(function() {
    $('.slider').slider();
    $('.dropdown-trigger').dropdown();
    $('.next').click(function() {
            $('.slider').slider('next');
        });

        $('.prev').click(function() {
            $('.slider').slider('prev');
        });
  }); // end of document ready
})(jQuery); // end of jQuery name space

function enviar() {
    var formulario = jQuery('#formulariocontacto').serialize();
    if (validar('formulariocontacto', '#Respuesta')) {
        AjaxDiv("enviar.php?" + formulario, "#Respuesta");
    }
}

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 7000); // Change image every 2 seconds
}