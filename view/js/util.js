$(document).ready(function(){
    
    
    /*********inicio animacion**************/


$(".lrobo").css({
    WebkitTransform: 'rotate(6deg)'
    });
  /*  
    $(".lrobo").animate({
    marginLeft:100},8000
        
        );
    */
   /*
   var i = 0;
   animate_loop = function(){
       if(i==0){
           i=1;
            $(".lrobo").css({
               WebkitTransform: 'rotate(6deg)'
            }, 1000, function(){
                animate_loop();
            });
            
        }
        else{//alert("seg");
             i=0;
            $(".lrobo").css({
                WebkitTransform: 'rotate(0deg)'
            }, 1000, function(){
                animate_loop();
            });
           
        }
   }
    animate_loop();
   */
  var i = 0;
   animate_loop = function(){
       if(i==0){
           i=1;
            $(".lrobo").css({
               WebkitTransform: 'rotate(6deg)'
            });
            
        }
        else{//alert("seg");
             i=0;
            $(".lrobo").css({
                WebkitTransform: 'rotate(0deg)'
            });
           
        }
   }
    animate_loop();
/*********fin animacion**************/


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
    /* inicio PARALAX*/
    $(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.65);
		
		$('body').css({
			'background-position': '0 -' + posicion + 'px'
		});
 
	});
    /*fin PARALAX*/
    
    
    

});

$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})

function removeClass(identificador){
    if(identificador == 0){
        $("#formularioCliente").removeClass("none");
        $("#busquedaNuevoCliente").addClass("none");
    }
    else{
        $("#formularioCliente").addClass("none");
        $("#busquedaNuevoCliente").removeClass("none");
    }
}

function visibleInvisible(tag1, tag2){
    $("#"+tag1+"").removeClass("none");
    $("#"+tag2+"").addClass("none");
}

$('a[data-toggle="tab"]').on('shown.bs.tab', 
    function (e) { 
        var target = $(e.target).attr("href");
    });   // activated tab alert(target); });