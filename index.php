<?php

require_once 'config/confApp.php'; //Incluyo la configuracion de la app
require_once 'config/confDBPDO.php'; //Incluyo la configuracion de la base de datos

session_start(); //Creo o recupero la sesion

if(!isset($_SESSION['paginaEnCurso'])){ //Si no hay una pagina en curso
    $_SESSION['paginaEnCurso'] = 'iniciopublico'; //Asigno a la pagina en curso la pagina de inicio publico
}
if(isset($_REQUEST['tecnologias'])){ //Si el usuario pulsa el boton de tecnologias muestra las tecnologias
    $_SESSION['paginaAnterior']= $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']= 'tecnologias';
    header('Location: index.php');
   exit;
}
require_once $controladores[$_SESSION['paginaEnCurso']]; //Cargo la pagina en curso

?>