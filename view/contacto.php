<?php
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <?php
    include_once './init_nivel_two.php';
  ?>
        <div class="col-md-1"></div>
        <div class="col-md-4" style="margin-bottom: 20px;">
            <div class="container">
            <img src="img/map_ubicacion.jpg" style="margin-top: 50px;"/>
            <address style="margin-top: 28px;">
                <strong class="text-primary">Empresa, S.A.</strong><br>
                28044 Valdemoro, Madrid<br>
                Madrid- Espa&ntilde;a<br>
                <abbr title="Phone">Teléfono:</abbr> (34) 666-555-333
              </address>

              <address>
                  <strong>Correo de contacto</strong>
                  <p style="
                     margin-top: 10px;
                     ">
                <a href="mailto:#" 
                   style="
                    border: 1px solid #007fcf;
                    padding: 0.5em 1em 0.5em 1em;
                    margin: 0.3em 0 0 0;
                    text-decoration: none;
                    ">
                    empresa.contactos@example.com
                </a>
                      </p>  
            </address>
            </div>
        </div>
        <div class="col-md-1"></div>
    <div class="col-md-5">
        <form>
             <h2 class="form-signin-heading text-center">Formulario de Contacto</h2>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre *</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" required/>
          </div>  
          <div class="form-group">
            <label for="exampleInputEmail1">Correo electr&oacute;nico *</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="" required/>
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Tel&eacute;fono *</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" required/>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Mensaje *</label>
            <textarea class="form-control" rows="5" required></textarea>
          </div>

          <button type="submit" class="btn btn-info btn">Enviar</button>
        </form>
    </div>
    <div class="col-md-1"></div>