<?php
    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
            $_SESSION['paginaEnCurso']= 'inicioprivado';
            $_SESSION['paginaAnterior']= 'micuenta';
            header('Location: index.php');
            exit;
    }
    if(isset($_REQUEST['cambiar'])){ //Si el usuario pulsa el boton de cambiar
            $_SESSION['paginaEnCurso']= 'cambiarpassword';
            $_SESSION['paginaAnterior']= 'micuenta';
            header('Location: index.php');
            exit;
    }
    if(isset($_REQUEST['eliminar'])){ //Si el usuario pulsa el boton de cambiar
            $_SESSION['paginaEnCurso']= 'eliminar';
            $_SESSION['paginaAnterior']= 'micuenta';
            header('Location: index.php');
            exit;
    }
    
    
    $entradaOk=true;//Defino la entrada como true
    //
    //ARRAY QUE TIENE LOS ERRORES DE LOS CAMPOS DEL FORMULARIO
    $aErrores= ['dUsuario'=>null];
    
    if(isset($_REQUEST['aceptar'])){ //Si el usuario pulsa el boton de ACEPTAR
            $desUsuario=$_REQUEST['descripcionUsuario']; //guardo en una variable en contenido del formulario
            $aErrores['dUsuario']=validacionFormularios::comprobarAlfaNumerico($desUsuario, 255, 4, 1); //Hago la validacion 
            
        
            foreach($aErrores as $campo =>$error){//Recorro el array de errores buscando si hay
                if($error !=null){// Si hay algun error 
                    $entradaOk=false; //Ponemos la entrada a false
                    $_REQUEST[$campo]="";//Vacia los campos
                }
            }
    }else{
        $entradaOk=false;//si no se ha rellenado nada entrada false
    }
    
    //SI TODO HA IDO BIEN
    if($entradaOk){
       
        $_SESSION['usuario212AplicacionFinal'] = UsuarioPDO::modificarUsuario($_SESSION['usuario212AplicacionFinal'], $desUsuario); //Guardo en la sesion el usuario valido
        $_SESSION['paginaEnCurso'] = 'inicioprivado'; //en la pagina actual estara la venta inicio privado
        $_SESSION['paginaAnterior'] = 'micuenta';// en la pagina anterior estara la ventana del login
        header('Location: index.php'); //Redirecciono a inicio privado
        exit; 
    }
    
    
    //SACAMOS EL NOMBRE DEL USUARIO 
    $nombreUsuario=$_SESSION['usuario212AplicacionFinal']->getCodUsuario();
    
    
    //SACAMOS LA DESCRIPCION DEL USUARIO 
    $desUsuario=$_SESSION['usuario212AplicacionFinal']->getDescUsuario();
    //SACAMOS EL NUMERO DE CONEXIONES
    $numConexiones=$_SESSION['usuario212AplicacionFinal']->getNumConexiones();

    //SACAMOS LA FECHA Y HORA DE LA ULTIMA CONEXION Y LA CONVERTIMOS A FECHA/HORA 
    $fechaUltimaConexion=$_SESSION['usuario212AplicacionFinal']->getFechaHoraUltimaConexion();
    $date=$fechaUltimaConexion;
    $fFechaHoraUltimaConexion1 = date('d-m-Y H:i:s', $date);

    //SACAMOS EL TIPO DE USUARIO
    $tipoUsuario=$_SESSION['usuario212AplicacionFinal']->getPerfil();
    
    //SACAMOS LA IMAGEN DEL USUARIO 
    $imagenUsuario=$_SESSION['usuario212AplicacionFinal']->getImagenUsuario();
    
    //SACAMOS EL PASSWORD DE USUARIO
    $passwordUsuario=$_SESSION['usuario212AplicacionFinal']->getPassword();
    
 require_once $vistas['layout'];
 
 ?>
