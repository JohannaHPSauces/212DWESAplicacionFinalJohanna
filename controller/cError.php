<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
        $_SESSION['paginaAnterior'] = '';
        $_SESSION['paginaEnCurso'] = $_SESSION['error']->getPaginaSiguiente();
        unset($_SESSION['error']); // destruye las variable 
        header('Location: index.php');
        exit;
}
    $error = $_SESSION['error']->getCodError();
    $descripcion = $_SESSION['error']->getDescError();
    $archivo = $_SESSION['error']->getArchivoError();
    $linea = $_SESSION['error']->getLineaError();
    
    require_once $vistas['layout'];
?>

