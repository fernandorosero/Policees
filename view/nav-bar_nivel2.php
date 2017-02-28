<?php
    include_once './init_nivel_two.php';
?>
<div id="navMenu">
<!-- inicio este nav mejor -->
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   
    <!--
    <div class="navbar-left">
        <img src="img/logo1.jpg" style="height:100px;width: 100px;"/>
        
    </div>
    -->
   
       <img alt="Brand" img src="img/PliceesCoorporative.jpg" class="imgCoorp hidden-xs">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand visible-xs" href="#">Policees</a>
       <!--
       -->
        <!--
        visible-xs  visible en movil
        visible en web
        -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!--
        <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      -->
      <!--
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      -->
      <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php">Inicio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="alarmas.php">Alarmas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="camaras.php">C&aacute;maras</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="control-horarios.php">Control de Horarios</a></li>
          </ul>
        </li>
        <li><a href="contacto.php">Contacto</a></li>
        <li>
            
            <form action="login.php" class="navbar-form navbar-left">
                <button type="submit" class="btn btn-info glyphicon"><spam class="glyphicon-log-in"> Acceso</spam></button>
           </form> 
        </li>
        <li><a href="#" data-toggle="modal" data-target="#myModal">Acceso</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <!-- inicio este nav mejor -->
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

</div>
