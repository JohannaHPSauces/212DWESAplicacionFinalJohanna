<?php

    if(isset($_REQUEST['cerrar'])){ //Si el usuario pulsa el boton de cerrar
        session_destroy();//destruyo la sesion
        header('Location: index.php');
        exit;
    }
    
    if(isset($_REQUEST['detalle'])){ //Si el usuario pulsa el boton de detalle
        $_SESSION['paginaEnCurso']= 'detalle';
        $_SESSION['paginaAnterior']= 'inicioprivado';
        header('Location: index.php');
        exit;
    }
    
    //SACAMOS EL NOMBRE DEL USUARIO 
    $nombreUsuario=$_SESSION['usuario212AplicacionFinal']->getDescUsuario();
    //SACAMOS EL NUMERO DE CONEXIONES
    $numConexiones=$_SESSION['usuario212AplicacionFinal']->getNumConexiones();
    //SACAMOS LA FECHA Y HORA DE LA ULTIMA CONEXION Y LA COMVERTIMOS A FECHA/HORA 
    $fechaUltimaConexionAnterior= $_SESSION['usuario212AplicacionFinal']->getFechaHoraUltimaConexionAnterior();
    $date=$fechaUltimaConexionAnterior;
    $fFechaHoraUltimaConexion = date('d-m-Y H:i:s', $date);
    
    require_once $vistas['layout'];
?>