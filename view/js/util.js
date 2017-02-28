$(document).ready(function(){
        //nos desplazamos entre todos los divs
        /*
        $('a.ancla').click(function(e){
        e.preventDefault();
    enlace  = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(enlace).offset().top
    }, 1000);
        });
        */
        //vamos al principio o al final de la página
        $('a.arriba').click(function(e){
            e.preventDefault();
            volver  = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(volver).offset().top
            }, 1000);
        });
        //pasando la cantidad de pixeles que queremos a scrollTop
        /*
        $('.prueba').click(function(){
                $('html, body').animate({scrollTop:100}, 2000); return false;
        });
        */
       /*var div_alto = $('#navMenu').height();
	alert(div_alto);*/
});

$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})