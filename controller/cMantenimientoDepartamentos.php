<?php
    if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de buscarDepartamentos
        $_SESSION['paginaEnCurso']= 'inicioprivado';
        unset($_SESSION['criterioBusquedaDepartamentos']);
        unset($_SESSION['codDepartamentoEnCurso']);
        $_SESSION['paginaAnterior']= 'mantenimiento';
        header('Location: index.php');
        exit;
    }
    if(isset($_REQUEST['editar'])){ //Si el usuario pulsa el boton de editar
        $_SESSION['codDepartamentoEnCurso'] = $_REQUEST['editar']; //Guardo en la variable de sesion el codigo de departamento en curso 
        $_SESSION['paginaAnterior'] = 'mantenimiento';
        $_SESSION['paginaEnCurso'] = 'editarDep'; 
        header('Location: index.php'); //Redireciono de nuevo a baja fisica departamento
        exit;
    }
    if(isset($_REQUEST['borrar'])){ //Si el usuario pulsa el boton de buscarDepartamentos
        $_SESSION['codDepartamentoEnCurso'] = $_REQUEST['borrar']; //Guardo en la variable de sesion el codigo de departamento en curso 
        $_SESSION['paginaAnterior'] = 'mantenimiento'; 
        $_SESSION['paginaEnCurso'] = 'borrarDep'; 
        header('Location: index.php'); //Redireciono de nuevo a baja fisica departamento
        exit;
    }
    if(isset($_REQUEST['añadir'])){ //Si el usuario ha pulsado el boton de añadir
        $_SESSION['paginaEnCurso']= 'añadirDep';
        $_SESSION['paginaAnterior']= 'mantenimiento';
        header('Location: index.php');
        exit;
    }
    
    if(isset($_REQUEST['baja'])){ //Si el usuario pulsa el boton de buscarDepartamentos
        DepartamentoPDO::bajaLogicaDepartamento($_REQUEST['baja']);
        header('Location: index.php');
        exit;
    }
    if(isset($_REQUEST['rehabilitar'])){ //Si el usuario pulsa el boton de buscarDepartamentos
        DepartamentoPDO::rehabilitarDepartamento($_REQUEST['rehabilitar']);
        header('Location: index.php');
        exit;
    }
    
    $entradaOk=true;//Defino la entrada como true
    
    //ARRAY QUE TIENE LOS ERRORES DE LOS CAMPOS DEL FORMULARIO
    $aErrores= ['dDepartamento'=>null];
    
    if(isset($_REQUEST['buscar'])){ //Si el usuario pulsa el boton de BUSCAR
            $aErrores['dDepartamento']=validacionFormularios::comprobarAlfabetico($_REQUEST['buscarDep'], 100, 1, 1); //Hago la validacion 
            $desDepartamento=$_REQUEST['buscarDep']; //guardo en una variable en contenido del formulario
            
                foreach($aErrores as $campo =>$error){//Recorro el array de errores buscando si hay
                    if($error !=null){// Si hay algun error 
                        $entradaOk=false; //Ponemos la entrada a false
                        $_REQUEST[$campo]="";//Vacia los campos
                    }
                }   
    }else{
        $entradaOk=false;
        $desDepartamento=null;
    }
    
    if($entradaOk){
        $_SESSION['criterioBusquedaDepartamentos']['descripcionBusqueda'] = $_REQUEST['buscarDep'];
        $_SESSION['criterioBusquedaDepartamentos']['estado'] = $_REQUEST['estado'];
    }
    //Si se ha enviado o no el formulario muestra los departamentos
    
    $aDepartamentosVista = [];//Array para guardar la informacion del departamento
   
    $oResultadoBuscar = DepartamentoPDO::buscarDepartamentoPorEstado($_SESSION['criterioBusquedaDepartamentos']['descripcionBusqueda'] ?? '', $_SESSION['criterioBusquedaDepartamentos']['estado'] ?? 0); //Obtengo los datos del departamento con el metodo buscaDepartamentosPorDesc    
    if ($oResultadoBuscar){ //Si el resultado es correcto
        foreach($oResultadoBuscar as $aDepartamento){//Recorro el objeto del resultado que contiene un array
            array_push($aDepartamentosVista, [//Hago uso del metodo array push para meter los valores en el array $aDepartamentosVista
                'codDepartamento' => $aDepartamento->getCodDepartamento(), //OBTENEMOS EL CODIGO DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA
                'descDepartamento' => $aDepartamento->getDescDepartamento(), //OBTENEMOS LA DESCRIPCION DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA
                'volumenNegocio' => $aDepartamento->getVolumenNegocio(), //OBTENEMOS EL VOLUMEN DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA
                'fechaAlta' => date('d/m/Y H:i:s' , $aDepartamento->getFechaCreacionDepartamento()), //OBTENEMOS LA FECHA DE CEACION DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA
                'fechaBaja' => !empty($aDepartamento->getFechaBajaDepartamento()) ? date('d/m/Y H:i:s', $aDepartamento->getFechaBajaDepartamento()) : '' //OBTENEMOS LA FECHA DE BAJA DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA SI NO HAY NO MOSTRAMOS NADA
                ]);
        }
    }else{
            $aErrores['descBuscarDepartamento'] = "No se encuentra el departamento";
    }

    
    require_once $vistas['layout'];
?>