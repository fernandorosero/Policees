<?php
    include_once './init_nivel_two.php';
    include_once './nav-bar_nivel2.php';
?>
<div id="cambioPass">
    <div class="container">
        
        
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form class="form-signin">
          <h2 class="form-signin-heading text-center">Cambio de contrase&ntilde;a</h2>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo electr&oacute;nico" required autofocus>
        
        <input type="password" id="inputPassword" class="form-control" placeholder="Nueva contrase&ntilde;a" required
               style="    margin-top: 5px;"
                >
        <input type="password" id="inputPassword" class="form-control" placeholder="Repetir contrase&ntilde;a" required
               style="    margin-top: 5px;"
                >
        <br/>
        <div class="col-md-6">
            <a href="../dashboard.php" class="btn btn-primary btn-block" style="margin-top: 3px;">Cancelar</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary btn-block" style="margin-top: 3px;" type="submit">Cambiar contrase&ntilde;a</button>
        </div>
        
      </form>
<!--
    <div id="retorno">
        <a href="http://localhost/Policees">&NestedLessLess; Volver</a>
    </div>
-->
    </div>
 </div> <!-- /container -->
 
 
 
<style type="text/css">
 body { background-color: #eee; }
</style>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </div>
</div>


<?php
    include_once '../footer.php';
?>
