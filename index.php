<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>__________________________<!--Policees Seguridad - Demo nada---></title>
        <!-- Latest compiled and minified CSS -->
        <!-- jQuery -->
        <script src="view/js/jquery.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        
        
        <!-- CSS -->
        <link rel="stylesheet" href="view/css/custom.css"/>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.carousel').carousel({
                    interval: 3000
                })
            });
       </script>
    </head>
    <body>
        <?php
        print("<!--<h1 class='titulo_demo'>HOME POLICEES-Demo- nada</h1>-->");
        ?>
        <nav class="navbar navbar-inverse">
           <div class="container">
                <div class="navbar-header">
                     <a class="navbar-brand" href="#">Inicio  |</a>
                </div>
                 <div class="navbar-header">
                     <a class="navbar-brand" href="#">Alarmas  |</a>
                </div>
                 <div class="navbar-header">
                     <a class="navbar-brand" href="#">Camaras  |</a>
                </div>
                 <div class="navbar-header">
                     <a class="navbar-brand" href="#">Control-Horarios  |</a>
                </div>
                 <div class="navbar-header">
                     <a class="navbar-brand" href="#">Contacto  |</a>
                </div>
                 <div class="navbar-right">
                     <a class="navbar-brand" href="view/login.php">Acceso</a>
                </div>
            </div>
        </nav>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="view/img/img3.jpg" alt="Primero">
      <div class="carousel-caption">
        banner uno
      </div>
    </div>
    <div class="item">
        <img src="view/img/img1.jpg" alt="Segundo">
      <div class="carousel-caption">
        banner 2
      </div>
    </div>
    <div class="item">
        <img src="view/img/img2.jpg" alt="Segundo">
      <div class="carousel-caption">
        banner 3
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
        
       
        
        
    </body>
    
</html>
