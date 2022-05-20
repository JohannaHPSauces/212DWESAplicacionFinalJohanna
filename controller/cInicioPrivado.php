<?php
    if(isset($_REQUEST['cerrar'])){ //Si el usuario pulsa el boton de cerrar
        session_destroy();//destruyo la sesion
        header('Location: index.php');
        exit;
    }
    if(isset($_REQUEST['editar'])){ //Si el usuario pulsa el boton de editar
        $_SESSION['paginaEnCurso']= 'micuenta';//Guardo en pagina actual la de micuenta
        $_SESSION['paginaAnterior']= 'inicioprivado'; //Guardo en pagina anterior la de inicioprivado
        header('Location: index.php');
        exit;
    }
    if(isset($_REQUEST['detalle'])){ //Si el usuario pulsa el boton de detalle
        $_SESSION['paginaEnCurso']= 'detalle';
        $_SESSION['paginaAnterior']= 'inicioprivado';
        header('Location: index.php');
        exit;
    }
    
    if(isset($_REQUEST['mantenimiento'])){ //Si el usuario pulsa el boton de mantenimiento
        $_SESSION['paginaEnCurso']= 'mantenimiento';
        $_SESSION['paginaAnterior']= 'inicioprivado';
        header('Location: index.php');
        exit;
    }
    if(isset($_REQUEST['mantenimientoU'])){ //Si el admin pulsa el boton de mantenimientoUsuarios
        $_SESSION['paginaEnCurso']= 'mantenimientoUsuario';
        $_SESSION['paginaAnterior']= 'inicioprivado';
        header('Location: index.php');
        exit;
    }
    if(isset($_REQUEST['botonF'])){ //Si el usuario pulsa el boton de fallo
        $consulta= "SELECT T01_CodUsuario FROM T02_Usuario";
        
        DBPDO::ejecutarConsulta($consulta);
    }
    if(isset($_REQUEST['rest'])){ //Si el usuario pulsa el boton de rest
        $_SESSION['paginaEnCurso']= 'rest';
        $_SESSION['paginaAnterior']= 'inicioprivado';
        header('Location: index.php');
        exit;
    }
    
    //SACAMOS EL NOMBRE DEL USUARIO 
    $nombreUsuario=$_SESSION['usuario212AplicacionFinal']->getDescUsuario();
    
    //SACAMOS EL TIPO DE USUARIO
    $tipoUsuario=$_SESSION['usuario212AplicacionFinal']->getPerfil();
    
    //SACAMOS EL NUMERO DE CONEXIONES
    $numConexiones=$_SESSION['usuario212AplicacionFinal']->getNumConexiones();
    
    //SACAMOS LA IMAGEN DEL USUARIO 
    $imagenUsuario=$_SESSION['usuario212AplicacionFinal']->getImagenUsuario();
    
    //SACAMOS LA FECHA Y HORA DE LA ULTIMA CONEXION Y LA CONVERTIMOS A FECHA/HORA 
    $fechaUltimaConexionAnterior= $_SESSION['usuario212AplicacionFinal']->getFechaHoraUltimaConexionAnterior();
    $date=$fechaUltimaConexionAnterior;
    $fFechaHoraUltimaConexion = date('d-m-Y H:i:s', $date);
    
    //fichero que contie el array de lo que cambia con la cookie
    include_once 'config/confCookie.php';
    require_once $vistas['layout'];
?>