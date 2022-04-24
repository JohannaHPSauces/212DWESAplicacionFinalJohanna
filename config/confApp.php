<?php

require_once 'core/210322ValidacionFormularios.php';

require_once 'model/Usuario.php';
require_once 'model/UsuarioDB.php';
require_once 'model/DB.php';
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';

$controladores =[
    "iniciopublico" => "controller/cInicioPublico.php",
    "login" => "controller/cLogin.php",
    "inicioPrivado" => "controller/cInicioPrivado.php",
    "detalle" => "controller/cDetalle.php",
];

$vistas =[
    "layout" => "view/layout.php",
    "iniciopublico" => "view/vInicioPublico.php",
    "login" => "view/vLogin.php",
    "inicioPrivado" => "view/vInicioPrivado.php",
    "detalle" => "view/vDetalle.php",
];
?>

