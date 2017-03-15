<?php
   include_once './init_nivel_one.php';
   include_once './nav-bar_nivel1.php';
?>
<div id="dashboard">
    <div class="container">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-sm-3 col-md-3 vistaDashboard">
                <a href="view/clientes.php" class="thumbnail noLineaEnlace">
                    <div class="caption text-center">
                        <p>Clientes</p>
                        <img src="view/img/users-1.png" class="imgDashboard"/>
                    </div>
               </a>
            </div>
            <div class="col-sm-3 col-md-3 vistaDashboard">
                <a href="view/listContactos.php" class="thumbnail noLineaEnlace">
                    <div class="caption text-center">
                        <p>Contactos</p>
                        <img src="view/img/agenda.png" class="imgDashboard"/>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 col-md-3 vistaDashboard">
                <a href="view/empleados.php" class="thumbnail noLineaEnlace">
                    <div class="caption text-center">
                        <p>Empleados</p>
                        <img src="view/img/user-7.png" class="imgDashboard"/>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 col-md-3 vistaDashboard">
                <a href="#" class="thumbnail noLineaEnlace">
                    <div class="caption text-center">
                        <p>Productos</p>
                        <img src="view/img/menu-4.png" class="imgDashboard"/>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 col-md-3 vistaDashboard">
                <a href="#" class="thumbnail noLineaEnlace">
                    <div class="caption text-center">
                        <p>Documentos</p>
                        <img src="view/img/folder-14.png" class="imgDashboard"/>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 col-md-3 vistaDashboard">
                <a href="#" class="thumbnail noLineaEnlace">
                    <div class="caption text-center">
                        <p>Videos</p>
                        <img src="view/img/video-camera-1.png" class="imgDashboard"/>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 col-md-3 vistaDashboard">
                <a href="view/zonaCliente.php" class="thumbnail noLineaEnlace">
                    <div class="caption text-center">
                        <p>Mis Cosas</p>
                        <img src="view/img/photos.png" class="imgDashboard"/>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 col-md-3 vistaDashboard">
                <a href="view/cambioPass.php" class="thumbnail noLineaEnlace">
                    <div class="caption text-center">
                        <p>mi contrase&ntilde;a</p>
                        <img src="view/img/key.png" class="imgDashboard"/>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
    include_once './footer.php';
?>
