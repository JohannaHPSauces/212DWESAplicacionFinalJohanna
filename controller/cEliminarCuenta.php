<?php

    if(isset($_REQUEST['cancelar'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        $_SESSION['paginaEnCurso']= 'micuenta';
        $_SESSION['paginaAnterior']= 'borrar';
        header('Location: index.php');
        exit;
    }
    
    
    if(isset($_REQUEST['aceptar'])){ 
        UsuarioPDO::borrarCuenta($_SESSION['usuario212AplicacionFinal']); //Registro la ultima conexion y actualizo el numero de conexiones con el metodo registrarUltimaConexion
        $_SESSION['paginaEnCurso'] = 'iniciopublico'; //en la pagina actual estara la venta inicio privado
        $_SESSION['paginaAnterior'] = 'cerrar';// en la pagina anterior estara la ventana del login
        header('Location: index.php'); //Redirecciono a inicio privado
        exit; 
    }
   
    require_once $vistas['layout'];
?>
