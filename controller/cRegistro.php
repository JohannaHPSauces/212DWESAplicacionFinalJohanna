<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        $_SESSION['paginaEnCurso']= 'login';
        $_SESSION['paginaAnterior']= 'registro';
        header('Location: index.php');
        exit;
    }

 require_once $vistas['layout'];
 ?>
