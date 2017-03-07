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
    
    <div id="myTabContent" class="tab-content responsive"> 
        <div class="tab-pane fade active in" id="docs"> 
            <div class="thumbnail" style="margin-top: 20px;">
                Aqui documentos!! 
            </div>
        </div> 
        <div class="tab-pane fade" id="videos"> 
             
            <div class="thumbnail" style="margin-top: 20px;">
                Aqui videos! 
                <!-- 4:3 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="img/videoprueba.mp4"></iframe>
                </div>
            </div>
        </div> 
        <div class="tab-pane fade" id="mensaje"> 
            Aqui mensajes! 
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