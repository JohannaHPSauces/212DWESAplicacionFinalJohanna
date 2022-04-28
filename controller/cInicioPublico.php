<?php

    if(isset($_REQUEST['salir'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        header('Location: ../../212ProyectoDWES/indexProyectoDWES.php'); //Redireciono a el index correspondiente
        exit;
    }
    if(isset($_REQUEST['iniciar'])){ //Si el usuario pulsa el boton de iniciar
        $_SESSION['paginaAnterior']='iniciopublico'; //Guardo en la pagina anterior la de iniciopublico
        $_SESSION['paginaEnCurso']= 'login'; //la pagina actual sera la del login.
        header('Location: index.php'); //Redireciono a el index correspondiente
        exit;
    }
    
    require_once $vistas['layout'];
?>
