<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        $_SESSION['paginaEnCurso']= 'login';
        $_SESSION['paginaAnterior']= 'registro';
        header('Location: index.php');
        exit;
    }
    //VARIABLE QUE CAMBIAREMOS SEGUN ESTEN BIEN O NO LAS COSAS
    $entradaOk=true;
    
    //ARRAY QUE CONTENDRA LOS ERRORES 
    $aErrores= ['usuario' =>null,
                'descripcion' =>null,
                'password' =>null,
                'repetirPassword'=>null
                ];
    
    if(isset($_REQUEST['aceptar'])){
        $aErrores['usuario']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['nombreUsuario'],12, 4, 1);//Hacemos la validacion del usuario
        $aErrores['descripcion']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcionUsuario'], 200, 4, 1);//Hacemos la validacion de la descripcion de usuario
        $aErrores['password']= validacionFormularios::validarPassword($_REQUEST['password'], 12, 4, 2, 1); //Hacemos la validacion de la comtraseña
        $aErrores['repetirPassword']= validacionFormularios::validarPassword($_REQUEST['repetirPassword'], 12, 4, 2, 1); //Hacemos la validacion la confirmacion de la contraseña
       
        //Comprobamos si el usuario existe en la base de datos
       $oUsuarioValido=UsuarioPDO::validarCodNoExiste($_REQUEST['nombreUsuario']);
       
       //Si existe mostrammos mensaje diciendo que ya existe ese usuario
        if($oUsuarioValido){
           $aErrores['usuario']="El usuario ya existe";
        }
        if($_REQUEST['password']!= $_REQUEST['repetirPassword']){//Si las dos contraseñas no coinciden
            $aErrores['password']= "Las contraseñas no coinciden";//Si no coinciden las contraseñas mostramos error
            $aErrores['repetirPassword']= "Las contraseñas no coinciden";//Si no coinciden las contraseñas mostramos error
                
        }
        
            foreach($aErrores as $campo =>$error){//Recorro el array de errores buscando si hay
                    if($error !=null){// Si hay algun error 
                        $entradaOk=false; //Ponemos la entrada a false
                        $_REQUEST[$campo]="";//Vacia los campos
                    }
            }
    }else{
        $entradaOk=false;//si no se ha rellenado correctamente entrada false
    }
    
    //SI TODO HA IDO BIEN CREAMOS EL NUEVO USUARIO
    if($entradaOk){
        $oUsuarioValido= UsuarioPDO::altaUsuario($_REQUEST['nombreUsuario'], $_REQUEST['password'], $_REQUEST['descripcionUsuario']);
        $_SESSION['usuario212AplicacionFinal'] = $oUsuarioValido; //Guardo en la sesion el usuario valido
        $_SESSION['paginaEnCurso'] = 'inicioprivado'; //en la pagina actual estara la venta inicio privado
        $_SESSION['paginaAnterior'] = 'registro';// en la pagina anterior estara la ventana del registro
        header('Location: index.php'); //Redirecciono a inicio privado
        exit; 
    }
        

 require_once $vistas['layout'];
 ?>
