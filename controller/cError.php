<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
        $_SESSION['paginaAnterior'] = '';
        $_SESSION['paginaEnCurso'] = $_SESSION['error']->getPaginaSiguiente();
        unset($_SESSION['error']);
        header('Location: index.php');
        exit;
}
    $err = $_SESSION['error']->getCodError();
    $des = $_SESSION['error']->getDescError();
    $arc = $_SESSION['error']->getArchivoError();
    $lin = $_SESSION['error']->getLineaError();
    
    require_once $vistas['layout'];
?>

