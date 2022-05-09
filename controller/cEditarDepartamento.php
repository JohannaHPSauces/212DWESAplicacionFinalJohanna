<?php
    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver
            $_SESSION['paginaEnCurso']= 'mantenimiento';
            $_SESSION['paginaAnterior']= 'editarDep';
            header('Location: index.php');
            exit;
    }
    
    $oDepartamento = DepartamentoPDO::buscarDepartamentoPorCodigo($_SESSION['codDepartamentoEnCurso']);
    
    $aDepartamento = [ //Guardo los datos del departamento en un array para mostrarlos
        'codDepartamento' => $oDepartamento->getCodDepartamento(),
        'descDepartamento' => $oDepartamento->getDescDepartamento(),
        'fechaCreacionDepartamento' => $oDepartamento->getFechaCreacionDepartamento(),
        'volumenNegocio' => $oDepartamento->getVolumenNegocio()
    ];
    
    $entradaOk=true;//Defino la entrada como true
    //
    //ARRAY QUE TIENE LOS ERRORES DE LOS CAMPOS DEL FORMULARIO
    $aErrores= ['dDepartamento'=>null,
                'vNegocio'=>null];
    
    if(isset($_REQUEST['aceptar'])){ //Si el usuario pulsa el boton de ACEPTAR
            $desDepartamento=$_REQUEST['descripcionDepartamento']; //guardo en una variable en contenido del formulario
            $volNegocio=$_REQUEST['volumenNegocio']; //guardo en una variable en contenido del formulario
            
            $aErrores['dDepartamento']=validacionFormularios::comprobarAlfabetico($_REQUEST['descripcionDepartamento'], 255, 4, 1); //Hago la validacion 
            $aErrores['vNegocio']=validacionFormularios::comprobarFloat($_REQUEST['volumenNegocio'], 255, 1, 1); //Hago la validacion 
            
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
        DepartamentoPDO::modificarDepartamento($_SESSION['codDepartamentoEnCurso'], $desDepartamento, $volNegocio); //Guardo en la sesion el usuario valido
        $_SESSION['paginaEnCurso'] = 'mantenimiento'; //en la pagina actual estara la ventana de mantenimiento
        $_SESSION['paginaAnterior'] = 'editarDep';// en la pagina anterior estara la ventana del editar dep
        header('Location: index.php'); //Redirecciono a inicio privado
        exit; 
    }
    
    
    //Guardamos en una variable el codigo del departamento para mostrarlo
    $codDepartamento=$aDepartamento['codDepartamento'];
    
    
    //Convertimos a fecha y hora
    $fechaCreacionDepartamento=  $aDepartamento['fechaCreacionDepartamento'];
    $date=$fechaCreacionDepartamento;
    $fFechaCreacionDepartamento = date('d-m-Y H:i:s', $date);
    
 require_once $vistas['layout'];
 
 ?>
