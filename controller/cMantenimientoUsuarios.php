<?php
    if(isset($_REQUEST['volver'])){ //Si el usuario ha pulsado el boton de volver
        $_SESSION['paginaEnCurso']='inicioprivado';
        $_SESSION['paginaAnterior']='mantenimientoUsuario';
        header('Location: index.php');
        exit;
    }

require_once $vistas['layout'];

?>