<?php

require_once 'config/confApp.php'; //Incluyo la configuracion de la app
require_once 'config/confDBPDO.php'; //Incluyo la configuracion de la base de datos

session_start(); //Creo o recupero la sesion

if(!isset($_SESSION['paginaEnCurso'])){ //Si no hay una pagina en curso
    $_SESSION['paginaEnCurso'] = 'iniciopublico'; //Asigno a la pagina en curso la pagina de inicio publico
}

require_once $controladores[$_SESSION['paginaEnCurso']]; //Cargo la pagina en curso

?>