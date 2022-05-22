<?php

    if(isset($_REQUEST['salir'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        header('Location: ../../212ProyectoDWES/indexProyectoDWES.php'); //Redireciono a el index correspondiente
        exit;
    }
   
    include_once 'config/confCookie.php';
    require_once $vistas['layout'];
?>