<?php
    include_once './init_nivel_two.php';
    include_once './nav-bar_nivel2.php';
?>

<div class="container">
    <div id="listContactos">
        <h2>Listado de C</h2>
        <div class="table-responsive table-bordered">
            <table class="table table-hover">
                <tr>
                    <th>Identificador</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Tel&eacute;fono</th>
                    <th>Mensaje</th>
                    <th>Ver</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td><a href="../index.php"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td><a href="../index.php"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td>XXXXXXXX</td>
                    <td><a href="../index.php"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                </tr>
            </table>
        </div>
        <nav aria-label="...">
            <ul class="pagination">
              <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
        </nav>
    </div>
    <div id="formContacto" class="thumbnail" style="padding: 12px; background: #eee">
        <h4>Contacto</h4>
        <form>
            <div class="form-group">
                <label class="espacioInputFormulario">Nombre:</label><span> Contacto nombre</span><br/>
                <label class="espacioInputFormulario">Correo electr&oacute;nico:</label><span> contacto@contacto.com</span><br/>
                <label class="espacioInputFormulario">Tel&eacute;fono:</label><span> 666333999</span><br/>
                <label class="espacioInputFormulario">Mensaje:</label><span> Lorem ipsun Lorem ipsun 
                Lorem ipsun Lorem ipsun Lorem ipsun Lorem ipsun Lorem ipsun Lorem ipsun Lorem ipsun </span><br/><br/>
                <hr/>
                <h4 class="espacioInputFormulario">Responder:</h4>
                <textarea rows="5" type="text" class="form-control espacioInputFormulario" id="" placeholder="Escribir respuesta" 
                          style="resize: none;"
                          ></textarea>
                <br/>
                <input type="submit" class="btn btn-primary"value="Responder"  style="margin-top: 4px;"/>
            </div>
        </form>
    </div>
</div>


<?php
include_once '../footer.php';
?>