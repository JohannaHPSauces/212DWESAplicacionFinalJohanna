<?php

    if(isset($_REQUEST['cancelar'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        $_SESSION['paginaEnCurso']= 'mantenimiento';
        $_SESSION['paginaAnterior']= 'borrarDep';
        header('Location: index.php');
        exit;
    }
    
    $oDepartamento = DepartamentoPDO::buscarDepartamentoPorCodigo($_SESSION['codDepartamentoEnCurso']); //Ejecuto la consulta que busca un departamento por el codigo que tiene la sesion
    
    $aDepartamento = [ //Guardo los datos del departamento en un array para mostrarlos
        'codDepartamento' => $oDepartamento->getCodDepartamento(),
        'descDepartamento' => $oDepartamento->getDescDepartamento(),
        'fechaCreacionDepartamento' => $oDepartamento->getFechaCreacionDepartamento(),
        'volumenNegocioDepartamento' => $oDepartamento->getVolumenNegocio()
    ];
    
    if(isset($_REQUEST['aceptar'])){ 
        DepartamentoPDO::borrarDepartamento($_SESSION['codDepartamentoEnCurso']); //Registro la ultima conexion y actualizo el numero de conexiones con el metodo registrarUltimaConexion
       
        $_SESSION['paginaEnCurso'] = 'mantenimiento'; //en la pagina actual estara la venta inicio privado
        $_SESSION['paginaAnterior'] = 'borrarDep';// en la pagina anterior estara la ventana del login
        header('Location: index.php'); //Redirecciono a inicio privado
        exit; 
    }
   
    require_once $vistas['layout'];
?>
