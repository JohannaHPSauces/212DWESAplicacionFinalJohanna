<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
        $_SESSION['paginaEnCurso']= 'inicioprivado'; //Guardo como pagina actual la de inicio publico
        header('Location: index.php');
        exit;
    }
    
    require_once $vistas['layout'];
?>

