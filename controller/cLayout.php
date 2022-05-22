<?php

    if(isset($_REQUEST['tecnologias'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
       $_SESSION['paginaEnCurso']= 'tecnologias';
            $_SESSION['paginaAnterior']= '';
            header('Location: index.php');
            exit;
    }
    
    require_once $vistas['layout'];
?>