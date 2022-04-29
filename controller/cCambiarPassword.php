<?php
    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
            $_SESSION['paginaEnCurso']= 'micuenta';
            $_SESSION['paginaAnterior']= 'cambiarpassword';
            header('Location: index.php');
            exit;
    }
    
    $entradaOk= true;
    
    //Array que contendra los errores
    $aErrores = ['viejaPassword' =>null,
                 'nuevaPassword'=> null,
                 'repetirPassword' =>null];
    
    if(isset($_REQUEST['aceptar'])){    
        $aErrores['viejaPassword']= validacionFormularios::validarPassword($_REQUEST['viejaPassword'], 8, 4, 2, 1);
        $aErrores['nuevaPassword']= validacionFormularios::validarPassword($_REQUEST['nuevaPassword'], 8, 4, 2, 1);
        $aErrores['repetirPassword']= validacionFormularios::validarPassword($_REQUEST['repetirPassword'], 8, 4, 2, 1);
            
            if(!UsuarioPDO::validarUsuario($_SESSION['usuario212AplicacionFinal']->getCodUsuario(), $_REQUEST['viejaPassword'])){
                $aErrores['viejaPassword'] = 'Contraseña incorrecta.';
                $entradaOk = false;
            }else{
                if($_REQUEST['nuevaPassword']!=$_REQUEST['repetirPassword']){ //Comprobar que las contraseñas sean iguales
                    $aErrores['nuevaPassword']= "Las contraseñas no coinciden";//Si no coinciden las contraseñas mostramos error
                     $aErrores['repetirPassword']= "Las contraseñas no coinciden";//Si no coinciden las contraseñas mostramos error
                }
                foreach($aErrores as $campo =>$error){//Recorro el array de errores buscando si hay algun error
                    if($error !=null){// Si hay algun error 
                        $entradaOk=false;//la entrada es false
                        $_REQUEST[$campo]="";//Vacia los campos
                    }
                }
            }
    }else{
        $entradaOk=false; //si no se ha rellenado nada entrada false 
    }
    //SI HA PUESTO TODO BIEN ACTUALIZAMOS LA NUEVA CONTRASEÑA
    if($entradaOk){
        $_SESSION['usuario212AplicacionFinal'] = UsuarioPDO::modificarPassword($_SESSION['usuario212AplicacionFinal'], $_REQUEST['nuevaPassword']); //Guardo en la sesion el usuario valido
        $_SESSION['paginaEnCurso'] = 'micuenta'; //en la pagina actual estara la venta inicio privado
        $_SESSION['paginaAnterior'] = 'cambiarpassword';// en la pagina anterior estara la ventana del login
        header('Location: index.php'); //Redirecciono a inicio privado
        exit;    
            
    }
 require_once $vistas['layout'];
 
 ?>
