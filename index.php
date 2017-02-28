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
        include_once './modalVista.php';
        ?>
        
        <?php
        include_once './carousel.php';
        ?>


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
