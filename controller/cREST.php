<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
        $_SESSION['paginaEnCurso']= 'inicioprivado';
        $_SESSION['paginaAnterior']= 'rest';
        header('Location: index.php');
        exit;
    }
    
    //Defiino la variable que cambiare en caso de que la entrada no sea correcta
    $entradaOk=true;
    
    //Defino el array que contendra los errores del formulario
    $aErrores=['eBuscarInput'=> null,
                'eResultado'=>null
              ];
    
    if(isset($_REQUEST['buscar'])){
        $aErrores['eBuscarInput']= validacionFormularios::comprobarEntero($_REQUEST['buscarInput'], 50, 1, 1);//Hacemos la validacion de lo que se ha buscado
        
        if($aErrores['eBuscarInput'] != null){// Si hay algun error 
            $entradaOk=false; //Ponemos la entrada a false
            $_REQUEST['eBuscarInput']="";//Vacia los campos
        }
        
    }else{
        $entradaOk=false;
    }
    
    if($entradaOk){
        $_SESSION['nombreProvincia']=$_REQUEST['buscarInput'];
         //hacemos la consulta
        $oResultadoBuscarProvincia= REST::tiempoProvincia($_REQUEST['buscarInput']);
        
        if($oResultadoBuscarProvincia== null){
            $aErrores['eResultado']="Esa provincia no existe";
        }
        
        $nombreProvincia= $oResultadoBuscarProvincia->getProvincia();
        $idProvincia= $oResultadoBuscarProvincia->getIdProvincia();
        $descripcionProvincia= $oResultadoBuscarProvincia->getDescripcionProvincia();
        $tiempoProvincia = $oResultadoBuscarProvincia->getTiempo();
        $tempMaximaProvincia= $oResultadoBuscarProvincia-> getTemperaturaMaxima();
        $tempMinimaProvincia= $oResultadoBuscarProvincia-> getTemperaturaMinima();
    }
    
    
///////////////////////////////////////////API USUARIO RANDOM/////////////////////////////////////////////////////////
    
    //Defiino la variable que cambiare en caso de que la entrada no sea correcta
    $entradaUsuarioOk=true;
    
    //Defino el array que contendra los errores del formulario
    $aErroresU=['eBuscarInputU'=> null,
                'eResultadoU'=>null
              ];
    
    if(isset($_REQUEST['buscarU'])){
        $aErroresU['eBuscarInputU']= validacionFormularios::comprobarEntero($_REQUEST['buscarInputU'], 5, 1, 1);//Hacemos la validacion de lo que se ha buscado
        
        if($aErroresU['eBuscarInputU'] != null){// Si hay algun error 
            $entradaUsuarioOk=false; //Ponemos la entrada a false
            $_REQUEST['eBuscarInputU']="";//Vacia los campos
        }
        
    }else{
        $entradaUsuarioOk=false;
    }
    
    if($entradaUsuarioOk){
         //hacemos la consulta
        $oResultadoBuscarUsuario= REST::usuario($_REQUEST['buscarInputU']);
        
        
        if($oResultadoBuscarUsuario== null){
            $aErroresU['eResultadoU']="Error";
        }
        var_dump($oResultadoBuscarUsuario);

        $foto= $oResultadoBuscarUsuario[0]->getFoto();
        $nombreU= $oResultadoBuscarUsuario[0]->getNombre();
        $apellidoU= $oResultadoBuscarUsuario[0]->getApellido();
        $calleU = $oResultadoBuscarUsuario[0]->getCalle();
        $paisU= $oResultadoBuscarUsuario[0]-> getPais();
        $emailU= $oResultadoBuscarUsuario[0]-> getEmail();
        $edadU= $oResultadoBuscarUsuario[0]-> getEdad();
        
    }

 require_once $vistas['layout'];
?>

