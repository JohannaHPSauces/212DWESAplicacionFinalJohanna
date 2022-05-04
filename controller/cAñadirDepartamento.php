<?php

    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver le llevamos a la pagina anterior
        $_SESSION['paginaEnCurso']= 'mantenimiento';
        $_SESSION['paginaAnterior']= 'añadirDep';
        header('Location: index.php');
        exit;
    }
    //VARIABLE QUE CAMBIAREMOS SEGUN ESTEN BIEN O NO LAS COSAS
    $entradaOk=true;
    
    //ARRAY QUE CONTENDRA LOS ERRORES 
    $aErrores= ['codDep' =>null,
                'desDep' =>null,
                'volNegocio' =>null
                ];
    
    if(isset($_REQUEST['aceptar'])){
        $aErrores['codDep']= validacionFormularios::comprobarAlfabetico($_REQUEST['codigoDepartamento'],3, 3, 1);//Hacemos la validacion del usuario
        $aErrores['desDep']= validacionFormularios::comprobarAlfabetico($_REQUEST['descripcionDepartamento'], 255, 4, 1);//Hacemos la validacion de la descripcion de usuario
        $aErrores['volNegocio']= validacionFormularios::comprobarFloat($_REQUEST['volumenNegocio'], 255, 1, 1); //Hacemos la validacion de la comtraseña
        
        //Comprobamos si el departamento existe en la base de datos
       $oDepartamentoValido= DepartamentoPDO::buscarDepartamentoPorCodigo($_REQUEST['codigoDepartamento']);
       
       //Si existe mostrammos mensaje diciendo que ya existe ese departamento
        if($oDepartamentoValido){
           $aErrores['codDep']="El departamento ya existe";
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
        $oDepartamentoValido= DepartamentoPDO::altaDepartamento($_REQUEST['codigoDepartamento'], $_REQUEST['descripcionDepartamento'], $_REQUEST['volumenNegocio']);
        $_SESSION['paginaEnCurso'] = 'mantenimiento'; //en la pagina actual estara la venta inicio privado
        $_SESSION['paginaAnterior'] = 'añadirDep';// en la pagina anterior estara la ventana del registro
        header('Location: index.php'); //Redirecciono a inicio privado
        exit; 
    }
        

 require_once $vistas['layout'];
 ?>
