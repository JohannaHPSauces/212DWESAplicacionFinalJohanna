<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
        $_SESSION['paginaEnCurso']= $_SESSION['paginaAnterior'];
        $_SESSION['paginaAnterior']= 'tecnologias';
        header('Location: index.php');
    }
   
    
    require_once $vistas['layout'];
?>