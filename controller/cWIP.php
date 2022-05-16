<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
        $_SESSION['paginaEnCurso']= $_SESSION['paginaAnterior']; //Guardo como pagina actual la de inicio publico
        $_SESSION['paginaAnterior']='';
        header('Location: index.php');
        exit;
    }
    
    require_once $vistas['layout'];
?>

