<?php
session_start();
$_SESSION["saludo"]="Hola Mundo";
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
        <?php if (isset($_SESSION['USR'])){ ?>
        
            <a href="cerrar.php">Cerrar sesión</a>
        
        <?php } ?>
        </div>
        
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n</a>
        
            <?php if (!isset($_SESSION['USR'])) { ?>
        
        <form method="post" action="revision.php">
            <div><label>Usuario</label><input type="text" name="nombre">
            <div><label>Clave</label><input type="password" name="clave"></br> 
            <input type="submit" name="Acceder">
        </form>
        
        
        <?php } ?>
        <?php
            echo '<br>';
            echo md5('#holamundo&');
            echo '<br>';
            echo md5('holamundo');
            echo '<br>';
            echo md5('HoLaMundo');
            echo '<br>';
            echo md5('HOLAMundo');
            echo '<br>';                                                                                                                                                                                    
        ?>
    </body>
    
</html>