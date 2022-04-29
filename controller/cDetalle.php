<?php

    if(isset($_REQUEST['cerrar'])){ //Si el usuario pulsa el boton de cerrar
        $_SESSION['paginaEnCurso']= 'inicioprivado';
        $_SESSION['paginaAnterior']= 'detalle';
        header('Location: index.php');
        exit;
    }

    require_once $vistas['layout'];
?>