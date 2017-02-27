<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Anclas suaves con jQuery</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			//nos desplazamos entre todos los divs
			$('a.ancla').click(function(e){
			e.preventDefault();
		    enlace  = $(this).attr('href');
		    $('html, body').animate({
		        scrollTop: $(enlace).offset().top
		    }, 1000);
			});
			//vamos al principio o al final de la página
			$('a.arriba').click(function(e){
			e.preventDefault();
		    volver  = $(this).attr('href');
		    $('html, body').animate({
		        scrollTop: $(volver).offset().top
		    }, 2000);
			});
			//pasando la cantidad de pixeles que queremos a scrollTop
			$('.prueba').click(function(){
				$('html, body').animate({scrollTop:100}, 2000); return false;
			});
		});
		</script>
		<style type="text/css">
			body{
				background: #ddd;
			}
			.ancla{
				float: left; 
				text-decoration: none; 
				color: #fff; 
				text-align: center;
				background: orange; 
				border: 3px solid #111;
				padding: 5px 20px; 
				margin: -68px 0px 0px 130px;
				position: absolute;
			}
			.divs{
				width: 700px; 
				height: 80px; 
				margin: 30px 0px 30px 240px; 
				color: #fff; 
				background: #111; 
				border: 3px solid orange;
			}
			#arriba, #abajo{
				width: 200px; 
				padding: 10px;
				margin: 30px 0px 30px 520px; 
				color: #fff; 
				text-align: center;
				background: orange; 
				border: 3px solid #111;
				text-decoration: none;
			}
			.prueba{
				width: 140px; 
				padding: 10px;
				margin: 0px 0px 30px 40px; 
				color: #fff; 
				text-align: center;
				background: orange; 
				border: 3px solid #111;
				text-decoration: none;
			}
		</style>
	</head>
	<body>
	    <div id="contenedor" style="min-height: 2000px"><br />
		<a href="#abajo" id="arriba" class="arriba">Ir abajo</a>
		<?php 
		for($i=1;$i<11;$i++):
		?>
		    <div class="divs" id="ancla<?=$i?>">Este es el div número <?=$i?></div>
		    <a href="#ancla<?=$i?>" class="ancla" >Al div <?=$i?></a>
		<?php
		endfor;
		?>
		<a href="#arriba" id="abajo" class="arriba">Ir arriba</a>
		<a href="" class="prueba">scrollTop con píxeles</a>
	    </div>
	</body>
</html>