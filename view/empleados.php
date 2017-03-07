<?php
    include_once './init_nivel_two.php';
    include_once './nav-bar_nivel2.php';
?>

<div id="clientes">
    <div class="container">
        <h2>Empleados</h2>
        <div class="col-md-7">
            <div class="table-responsive table-bordered">
                <table class="table table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Tel&eacute;fono</th>
                        <th>Ver</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>XXXXXXXX</td>
                        <td>XXXXXXXX</td>
                        <td>XXXXXXXX</td>
                        <td>
                            <a href="../index.php" style="color:green;"><span class="glyphicon glyphicon-pencil"/></a>
                            <a href="../index.php" style="color:red;"><span class="glyphicon glyphicon-remove" style="margin-left: 6px;"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>XXXXXXXX</td>
                        <td>XXXXXXXX</td>
                        <td>XXXXXXXX</td>
                        <td>
                            <a href="../index.php" style="color:green;"><span class="glyphicon glyphicon-pencil"/></a>
                            <a href="../index.php" style="color:red;"><span class="glyphicon glyphicon-remove" style="margin-left: 6px;"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>XXXXXXXX</td>
                        <td>XXXXXXXX</td>
                        <td>XXXXXXXX</td>
                        <td>
                            <a href="../index.php" style="color:green;"><span class="glyphicon glyphicon-pencil"/></a>
                            <a href="../index.php" style="color:red;"><span class="glyphicon glyphicon-remove" style="margin-left: 6px;"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>XXXXXXXX</td>
                        <td>XXXXXXXX</td>
                        <td>XXXXXXXX</td>
                        <td>
                            <a href="../index.php" style="color:green;"><span class="glyphicon glyphicon-pencil"/></a>
                            <a href="../index.php" style="color:red;"><span class="glyphicon glyphicon-remove" style="margin-left: 6px;"/></a>
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
        <div class="col-md-5">
            <div id="busquedaNuevoCliente">
                <input type="text"/>
                <a href="#"  class="btn btn-default btn-sm" style="margin-left: 4px;margin-bottom: 3px;"><span class="glyphicon glyphicon-search"></span></a>
                <br/>
                <a href="#" class="btn btn-primary" style="margin-top: 10px;" onclick="removeClass(0)">Nuevo Empleado</a>
            </div>
            <div id="formularioCliente" class="none thumbnail" style="padding: 12px;">
                <h4>Nuevo Empleado</h4>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control espacioInputFormulario" id="" placeholder="Nombre"/>
                        <input type="text" class="form-control espacioInputFormulario" id="" placeholder="CIF/NIF"/>
                        <input type="email" class="form-control espacioInputFormulario" id="" placeholder="Correo electr&oacute;nico"/>
                        <input type="number" class="form-control espacioInputFormulario" id="" placeholder="Tel&eacute;fono"/>
                        <input type="text" class="form-control espacioInputFormulario" id="" placeholder="Direcci&oacute;n"/>
                        <input type="number" class="form-control espacioInputFormulario" id="" placeholder="C&oacute;digo postal"/>
                        <div class="form-group" style="margin-top: 6px;">
                            <label for="exampleInputFile">Agregar foto</label>
                            <input type="file" id="exampleInputFile">
                        </div>
                        <a href="#" class="btn btn-success" onclick="removeClass(1)" style="margin-top: 4px;">Cancelar</a>
                        <input type="submit" class="btn btn-primary"value="Guardar"  style="margin-top: 4px;"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include_once '../footer.php';
?>