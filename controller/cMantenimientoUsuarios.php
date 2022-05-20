<?php
    if(isset($_REQUEST['volver'])){ //Si el usuario ha pulsado el boton de volver
        $_SESSION['paginaEnCurso']='inicioprivado';
        $_SESSION['paginaAnterior']='mantenimientoUsuario';
        header('Location: index.php');
        exit;
    }
 header('Access-Control-Allow-Origin: *'); 
require_once $vistas['layout'];

?>