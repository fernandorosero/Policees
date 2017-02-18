<!DOCTYPE html>
<?php
    include_once './init_nivel_one.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>__________________________<!--Policees Seguridad - Demo nada---></title>
        <!-- Latest compiled and minified CSS -->
       <script>
$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})
</script>
    </head>
    <body>
        <?php
        print("<!--<h1 class='titulo_demo'>HOME POLICEES-Demo- nada</h1>-->");
        include_once './nav-bar_nivel1.php';
        ?>
        
        <!-- inicio carousel -->
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
              <img src="view/img/img7.jpg" alt="Primero">
            <div class="carousel-caption">
              banner uno
            </div>
          </div>
          <div class="item">
              <img src="view/img/img4.jpg" alt="Segundo">
            <div class="carousel-caption">
              banner 2
            </div>
          </div>
          <div class="item">
              <img src="view/img/img5.jpg" alt="Segundo">
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
        <!-- Fin carousel -->
        


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Acceso</h4>
              </div>
              <div class="modal-body">
                <!-- inicio formulario-->
                <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
                    <!--
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        -->

                <!-- fin formulario -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Aceptar</button>
              </div>
                </form>
            </div>
          </div>
        </div>
        <h2>Productos</h2>
        <!-- inicio productos -->
        <div class="row" style="margin-top: 40px;">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="view/img/camara-150x150.jpg" alt="camara">
            <div class="caption">
                <h3>C&aacute;maras de seguridad</h3>
              <p>Especialistas en instalación y manteniemiento de cámaras de seguridad</p>
              <p><a href="view/camaras.php" class="btn btn-lg btn-primary btn-block" role="button">Ir a Cámaras</a></p>
            </div>
          </div>
        </div>
            
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="view/img/detalle1-150x150.jpg" alt="camara">
            <div class="caption">
                <h3>Alarmas</h3>
              <p>Especialistas en instalación y manteniemiento de alarmas en todos los modelos</p>
              <p><a href="view/camaras.php" class="btn  btn-lg btn-primary btn-block" role="button">Ir a Alarmas</a></p>
            </div>
          </div>
        </div>
            
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="view/img/control_acceso-300x300.jpg" alt="camara" style="height: 150px;">
            <div class="caption">
                <h3>Control de accesos</h3>
              <p>Especialistas en instalación y manteniemiento de Control de accesos, para empresas y particulares</p>
              <p><a href="view/camaras.php" class="btn  btn-lg btn-primary btn-block" role="button">Ir a Control Horarios</a></p>
            </div>
          </div>
        </div>    
      </div>
        <!-- fin productos -->
        
        <!-- inicio formulario contacto -->
        <?php
        //include './view/contacto.php';
        ?>
        <!-- fin formulario contacto -->
        <?php
            include_once './footer.php';
        ?>
    </body>
    
</html>
