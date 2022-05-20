<?php

require_once '../config/confDBPDO.php';
require_once '../model/DB.php';
require_once '../core/210322ValidacionFormularios.php';
require_once '../model/DBPDO.php';
require_once '../model/AppError.php';
require_once '../model/Usuario.php';
require_once '../model/UsuarioDB.php';
require_once '../model/UsuarioPDO.php';




//http://daw212.sauces.local/212DWESAplicacionFinalJohanna/API/buscarUsuarioPorDescripcion.php?descUsuario=
//http://192.168.1.112/212DWESAplicacionFinalJohanna/API/buscarUsuarioPorDescripcion.php?descUsuario=

$bEntradaOK = true;
if(isset($_REQUEST['descUsuario'])){
    if(validacionFormularios::comprobarAlfaNumerico($_REQUEST['descUsuario'], 255)){
        $bEntradaOK = false;
    }
}

/* Si no hay entrada (no se ha especificado una descripción) o se ha especificado
 * y la entrada ha sido válida, busca los usuarios en la base de datos.
 */
if($bEntradaOK){
    $aUsuariosDevueltos = UsuarioPDO::buscaUsuariosporDesc($_REQUEST['descUsuario']??'');
    $aUsuarios = [];
    
    foreach ($aUsuariosDevueltos as $oUsuario) {
        array_push($aUsuarios, [
            'codUsuario' => $oUsuario->getCodUsuario(),
            'descUsuario' => $oUsuario->getDescUsuario(),
            'numConexiones' => $oUsuario->getNumConexiones(),
            'password' => $oUsuario->getPassword(),
            'fechaHoraUltimaConexion' => $oUsuario->getFechaHoraUltimaConexion(),
            'perfil' => $oUsuario->getPerfil(),
            'imagenUsuario' => $oUsuario->getImagenUsuario()
        ]);
    }
    
    print_r(json_encode($aUsuarios, JSON_PRETTY_PRINT));
}