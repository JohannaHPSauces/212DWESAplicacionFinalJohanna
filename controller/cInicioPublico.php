<?php

    if(isset($_REQUEST['salir'])){ //Si el usuario pulsa el boton de salir, sale de la aplicacion
        header('Location: ../../212ProyectoDWES/indexProyectoDWES.php'); //Redireciono a el index correspondiente
        exit;
    }
    if(isset($_REQUEST['iniciar'])){ //Si el usuario pulsa el boton de iniciar
        $_SESSION['paginaAnterior']='iniciopublico'; //Guardo en la pagina anterior la de iniciopublico
        $_SESSION['paginaEnCurso']= 'login'; //la pagina actual sera la del login.
        header('Location: index.php'); //Redireciono a el index correspondiente
        exit;
    }
    //Si se ha pulsado el boton de los  idiomas, creamos la cookie
    if (!isset($_COOKIE['idioma'])){
        setcookie("idioma", "es", time() + 30*24*60*60); //le pongo el nombre, el valor de la variable, y la fecha de caducidad.(1 mes)
         header('Location: index.php'); //Redireciono a el index correspondiente
        exit;
        }
        
        //Dependiendo del boton selcecionado, cambia el idioma
    if(isset($_REQUEST['idiomaSeleccionado'])){
        setcookie("idioma", $_REQUEST['idiomaSeleccionado'],time() + 30*24*60*60);//Ponemos que el idioma sea el seleccionado en el boton
         header('Location: index.php'); //Redireciono a el index correspondiente
        exit;
    }
    //fichero que contie el array de lo que cambia con la cookie
    include_once 'config/confCookie.php';
    require_once $vistas['layout'];
?>
