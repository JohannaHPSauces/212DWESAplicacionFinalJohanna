<?php

    if(isset($_REQUEST['tecnologias'])){ //Si el usuario pulsa el boton de tecnologias, sale de la aplicacion
        $_SESSION['paginaEnCurso']= 'tecnologias';
        $_SESSION['paginaAnterior']= 'tecnologias';
        header('Location: index.php');
        exit;
    }
    
    require_once $vistas['layout'];
?>