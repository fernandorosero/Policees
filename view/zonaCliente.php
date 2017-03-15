<?php
    include_once './init_nivel_two.php';
    include_once './nav-bar_nivel2.php';
?>

<div class="container" style="padding: 20px;">
    <ul id="myTab" class="nav nav-tabs responsive">
        <li class="active">
            <a href="#docs" data-toggle="tab">Documentos</a>
        </li>
        <li class="">
            <a href="#videos" data-toggle="tab">Videos</a></li>
        <!--
        <li class="">
            <a href="#mensaje" data-toggle="tab">Mensajes</a>
        </li>
        -->
    </ul>
    <div id="zonaMisCosas">
    <div id="myTabContent" class="tab-content responsive"> 
        <div class="tab-pane fade active in" id="docs"> 
            <div class="thumbnail" style="margin: 10px;">
                <h2>Documentos</h2>
                <!------------------>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Facturas
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">2017</li>
                                <li class="list-group-item">2016</li>
                                <li class="list-group-item">2015</li>
                                
                              </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-success">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Recibos
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">2017</li>
                                <li class="list-group-item">2016</li>
                                <li class="list-group-item">2015</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-danger">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Pagos pendientes
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">2017</li>
                                <li class="list-group-item">2016</li>
                                <li class="list-group-item">2015</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
             <!-------------------------->
                
                
            </div>
        </div> 
        <div class="tab-pane fade" id="videos"> 
             
            <div class="thumbnail" style="margin: 10px;">
                <h2>V&iacute;deos</h2>
                <!------------------>
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseUno" aria-expanded="true" aria-controls="collapseOne">
                              C&aacute;maras seguridad
                          </a>
                        </h4>
                      </div>
                      <div id="collapseUno" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <!-- inicio 4:3 aspect ratio -->
                                    <div style="width: 70%">
                                        <div class="embed-responsive embed-responsive-16by9" >
                                            <iframe class="embed-responsive-item" src="img/videoprueba.mp4"></iframe>
                                        </div>
                                    </div>
                                    <!-- fin 4:3 aspect ratio -->
                                </li>
                                <li class="list-group-item">
                                <!-- inicio 4:3 aspect ratio -->
                                    <div style="width: 70%">
                                        <div class="embed-responsive embed-responsive-16by9" >
                                            <iframe class="embed-responsive-item" src="img/videoprueba.mp4"></iframe>
                                        </div>
                                    </div>
                                    <!-- fin 4:3 aspect ratio -->
                                </li>
                                <li class="list-group-item">2015</li>
                                
                              </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-success">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseDos" aria-expanded="false" aria-controls="collapseTwo">
                            Backup
                          </a>
                        </h4>
                      </div>
                      <div id="collapseDos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">2017</li>
                                <li class="list-group-item">2016</li>
                                <li class="list-group-item">2015</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-danger">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTres" aria-expanded="false" aria-controls="collapseThree">
                              V&iacute;deos temporales
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">2017</li>
                                <li class="list-group-item">2016</li>
                                <li class="list-group-item">2015</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
             <!-------------------------->
                
            </div>
        </div> 
        <div class="tab-pane fade" id="mensaje"> 
            Aqui mensajes! 
        </div> 
    </div> 
        
    </div>
</div>
<!--
<ul id="myTab" class="nav nav-tabs">
    <li class="active">
        <a href="#home" data-toggle="tab">Home</a>
    </li> 
    <li class="">
        <a href="#profile" data-toggle="tab">Profile</a>
    </li> 
</ul> 

<div id="myTabContent" class="tab-content"> 
    <div class="tab-pane fade active in" id="home"> home tab! </div> 
    <div class="tab-pane fade" id="profile"> profile tab! </div> 
</div> 
-->

<?php
    include_once '../footer.php';
?>
