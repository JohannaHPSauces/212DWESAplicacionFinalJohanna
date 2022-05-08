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
    if(isset($_REQUEST['borrar'])){ //Si el usuario pulsa el boton de borrar
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
    $aErrores= ['dDepartamento'=>null,
                'estado' => ''
               ];
    
    if(isset($_REQUEST['buscar'])){ //Si el usuario pulsa el boton de BUSCAR
        $entradaOk=true;    
        $aErrores['dDepartamento']=validacionFormularios::comprobarAlfabetico($_REQUEST['desDepartamento'], 100, 1,0); //Hago la validacion 
            foreach($aErrores as $campo =>$error){//Recorro el array de errores buscando si hay
                if($error !=null){// Si hay algun error 
                    $entradaOk=false; //Ponemos la entrada a false
                    $_REQUEST[$campo]="";//Vacia los campos
                }
            }   
    }else{
        $entradaOk=false;//si algo sale mal, ponemos la entrada a false
    }
    
    if($entradaOk){
        $_SESSION['criterioBusquedaDepartamentos']['descripcionBusqueda'] = $_REQUEST['desDepartamento'];
        switch ($_REQUEST['estado']) {
        case 'baja':
            $iEstado = DepartamentoPDO::DEPARTAMENTOS_BAJA;
            break;
        case 'alta':
            $iEstado = DepartamentoPDO::DEPARTAMENTOS_ALTA;
            break;
        case 'todos':
            $iEstado = DepartamentoPDO::DEPARTAMENTOS_TODOS;
            break;
    }
    $_SESSION['criterioBusquedaDepartamentos']['estado'] = $iEstado;
    }
    
    $aDepartamentosVista = [];//Array para guardar la informacion del departamento
  
    $aResultadoBuscar = DepartamentoPDO::buscarDepartamentoPorDesYEstado($_SESSION['criterioBusquedaDepartamentos']['descripcionBuscada'] ?? '', $_SESSION['criterioBusquedaDepartamentos']['estado'] ?? 0); //Obtengo los datos del departamento con el metodo buscaDepartamentosPorDesc

    if ($aResultadoBuscar){ //Si el resultado es correcto
        foreach($aResultadoBuscar as $oDepartamento){//Recorro el objeto del resultado que contiene un array
            array_push($aDepartamentosVista, [//Hago uso del metodo array push para meter los valores en el array $aDepartamentosVista
                'codDepartamento' => $oDepartamento->getCodDepartamento(), //OBTENEMOS EL CODIGO DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA
                'descDepartamento' => $oDepartamento->getDescDepartamento(), //OBTENEMOS LA DESCRIPCION DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA
                'volumenNegocio' => $oDepartamento->getVolumenNegocio(), //OBTENEMOS EL VOLUMEN DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA
                'fechaAlta' => date('d/m/Y H:i:s' , $oDepartamento->getFechaCreacionDepartamento()), //OBTENEMOS LA FECHA DE CEACION DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA
                'fechaBaja' => !empty($oDepartamento->getFechaBajaDepartamento()) ? date('d/m/Y H:i:s', $oDepartamento->getFechaBajaDepartamento()) : '' //OBTENEMOS LA FECHA DE BAJA DE DEPARTAMENTO PARA LUEGO MOSTRARLO EN LA VISTA SI NO HAY NO MOSTRAMOS NADA
                ]);
        }
    }
    require_once $vistas['layout'];
?>