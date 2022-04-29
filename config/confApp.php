<?php

require_once 'core/210322ValidacionFormularios.php';

require_once 'model/Usuario.php';
require_once 'model/UsuarioDB.php';
require_once 'model/DB.php';
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';
require_once 'model/AppError.php';

$controladores =[
    "iniciopublico" => "controller/cInicioPublico.php",
    "login" => "controller/cLogin.php",
    "inicioprivado" => "controller/cInicioPrivado.php",
    "detalle" => "controller/cDetalle.php",
    "micuenta" => "controller/cMiCuenta.php",
    "cambiarpassword" => "controller/cCambiarPassword.php",
    "eliminar" => "controller/cEliminarCuenta.php",
    "registro" => "controller/cRegistro.php",
    "wip" => "controller/cWIP.php",
    "error" => "controller/cError.php"
];

$vistas =[
    "layout" => "view/layout.php",
    "iniciopublico" => "view/vInicioPublico.php",
    "login" => "view/vLogin.php",
    "inicioprivado" => "view/vInicioPrivado.php",
    "detalle" => "view/vDetalle.php",
    "micuenta" => "view/vMiCuenta.php",
    "cambiarpassword" => "view/vCambiarPassword.php",
    "eliminar" => "view/vEliminarCuenta.php",
    "registro" => "view/vRegistro.php",
    "wip" => "view/vWIP.php",
    "error" => "view/vError.php"
];
?>

