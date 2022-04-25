<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        $_SESSION['paginaEnCurso']= 'inicioPublico';
        header('Location: index.php');
        exit;
    }
    
    //variable que cambiaremos en funcion de si este bien o mal
    $entradaOk= true;
    
    //arrayy para que en caso de que haya algun error guaardarlo
    $aErrores = ['usuario' =>null,
                 'password'=> null];
    
    //SI SE HA PULSADO EL BOTON ENTRAR
    if(isset($_REQUEST['entrar'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        
    
    }else{
            $entradaOk= false;//Si el usuario no le ha dado ha enviar los datos
    }
    
    ////Si el usuarioy la contraseña estan bien
    if($entradaOk){
        
        
    }
   
    require_once $vistas['layout'];
?>
