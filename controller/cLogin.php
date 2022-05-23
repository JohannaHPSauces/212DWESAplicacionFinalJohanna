<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
        $_SESSION['paginaEnCurso']= 'iniciopublico'; //Guardo como pagina actual la de inicio publico
        header('Location: index.php');
        exit;
    }
    if(isset($_REQUEST['registrarse'])){ //Si el usuario pulsa el boton de registrarse
        $_SESSION['paginaEnCurso']= 'registro';//Guardo en pagina actual la del registro
        $_SESSION['paginaAnterior']= 'login'; //y como pagina anterior la del login
        header('Location: index.php');
        exit;
    }
    
    
    //VARIABLE QUE CAMBIAREMOS SI LA ENTRADA ESTA MAL O BIEN
    $entradaOk= true;
    
    //ARRAY QUE ALMACENARA SI HAY ALGUN ERROR EN LOS CAMPOS DEL FORMULARIO
    $aErrores = ['usuario' =>null,
                 'password'=> null];
    
    //SI SE HA PULSADO EL BOTON ENTRAR
    if(isset($_REQUEST['entrar'])){ 
        //hacemos la validacion, si hay algun error pone la entrada a falsa
        if(validacionFormularios::comprobarAlfaNumerico($_REQUEST['codUsuario'], 12, 4, 1) || validacionFormularios::validarPassword($_REQUEST['password'], 12, 4, 2, 1)){
            $entradaOk=false;
        }else{
            $usuarioIntroducido= $_REQUEST['codUsuario']; //Guardo el usuario introducido
            $passwordIntroducida= $_REQUEST['password']; //Guardo la contraseña introducida

            $oUsuarioValido = UsuarioPDO::validarUsuario($usuarioIntroducido,$passwordIntroducida);//validamos si existe el usuario
        
            if(!$oUsuarioValido){ //Si el usuario no existe ponemos la entrada falsa
                $aErrores['usuario']= "Usuario no encontrado";
                $entradaOk = false;
            }
        }
         
    }else{
        $entradaOk= false;//Si el usuario no le ha dado ha enviar los datos
    }
    ////SI TODO HA IDO BIEN
    if($entradaOk){
        $oUsuarioValido = UsuarioPDO::registrarUltimaConexion($oUsuarioValido); //Registro la ultima conexion y actualizo el numero de conexiones con el metodo registrarUltimaConexion
        $_SESSION['usuario212AplicacionFinal'] = $oUsuarioValido; //Guardo en la sesion el usuario valido
        $_SESSION['paginaEnCurso'] = 'inicioprivado'; //en la pagina actual estara la venta inicio privado
        $_SESSION['paginaAnterior'] = 'login';// en la pagina anterior estara la ventana del login
        header('Location: index.php'); //Redirecciono a inicio privado
        exit; 
    }
   
    require_once $vistas['layout'];
?>
