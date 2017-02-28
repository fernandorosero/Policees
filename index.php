<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>__________________________<!--Policees Seguridad - Demo nada---></title>
        <!-- Latest compiled and minified CSS -->
       <script>

</script>
    </head>
    <body>
        <a href="#abajo" id="arriba" class="arriba" ></a>
        <?php
            print("<!--<h1 class='titulo_demo'>HOME POLICEES-Demo- nada</h1>-->");
            include_once './nav-bar_nivel1.php';
        ?>
        
        <?php
        include_once './carousel.php';
        ?>


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
        
        <?php
            include_once './productos.php';
        ?>
        
        <!-- inicio formulario contacto -->
        <?php
         include 'contacto.php';
        ?>
        <!-- fin formulario contacto -->
        <?php
            include_once './footer.php';
        ?>
    </body>
    <?php
        include_once './init_nivel_one.php';
    ?>
</html>
