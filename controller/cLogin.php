<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        $_SESSION['paginaEnCurso']= 'iniciopublico';
        header('Location: index.php');
        exit;
    }
    
    //variable que cambiaremos en funcion de si este bien o mal
    $entradaOk= true;
    
    //arrayy para que en caso de que haya algun error guaardarlo
    $aErrores = ['usuario' =>null,
                 'password'=> null];
    
    //SI SE HA PULSADO EL BOTON ENTRAR
    if(isset($_REQUEST['entrar'])){ 
        $aErrores['usuario']=validacionFormularios::comprobarAlfaNumerico($_REQUEST['usuario'], 12, 4, 1);
        $aErrores['password']=validacionFormularios::validarPassword($_REQUEST['password'], 12, 4, 2, 1);
        
        $usuarioIntroducido= $_REQUEST['usuario']; //Guardo el usuario introducido
        $passwordIntroducida= $_REQUEST['password']; //Guardo la contraseña introducida
                
        $oUsuarioValido = UsuarioPDO::validarUsuario($usuarioIntroducido, $passwordIntroducida);
        if(!isset($oUsuarioValido)){ //Si el usuario no existe la entrada es falsa
            $entradaOK = false;
        }            
            
        foreach ($aErrores as $campo => $error){//Recorre el array en busca de errores, con que haya uno entra
            if ($error != null){                
                $entradaOK = false;//Y nos cambia la variable entrada a false
                $_REQUEST[$campo]="";//Limpiamos los campos del formulario
            } 
        }
    }else{
        $entradaOk= false;//Si el usuario no le ha dado ha enviar los datos
    }
    
    ////Si el usuarioy la contraseña estan bien
    if($entradaOk){
        
        
    }
   
    require_once $vistas['layout'];
?>
