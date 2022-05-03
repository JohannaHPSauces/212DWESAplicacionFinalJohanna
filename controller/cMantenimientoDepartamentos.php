<?php
    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de buscarDepartamentos
        $_SESSION['paginaEnCurso']= 'inicioprivado';
        $_SESSION['paginaAnterior']= 'mantenimiento';
        header('Location: index.php');
        exit;
    }
    
    $entradaOk=true;//Defino la entrada como true
    
    //ARRAY QUE TIENE LOS ERRORES DE LOS CAMPOS DEL FORMULARIO
    $aErrores= ['dDepartamento'=>null];
    
    if(isset($_REQUEST['buscar'])){ //Si el usuario pulsa el boton de BUSCAR
            $desDepartamento=$_REQUEST['buscarDep']; //guardo en una variable en contenido del formulario
            $aErrores['dDepartamento']=validacionFormularios::comprobarAlfabetico($desDepartamento, 100, 1, 1); //Hago la validacion 
            
                foreach($aErrores as $campo =>$error){//Recorro el array de errores buscando si hay
                    if($error !=null){// Si hay algun error 
                        $entradaOk=false; //Ponemos la entrada a false
                        $_REQUEST[$campo]="";//Vacia los campos
                    }
                }   
    }else{
        $entradaOK=false;
       
    }
    require_once $vistas['layout'];
?>