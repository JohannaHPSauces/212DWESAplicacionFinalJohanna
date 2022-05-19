<?php

require_once '../config/confDBPDO.php';
require_once '../model/DB.php';
require_once '../model/DBPDO.php';
require_once '../model/AppError.php';
require_once '../model/Usuario.php';
require_once '../model/UsuarioPDO.php';


$entradaOk=true;
$aUsuarios = [];
$aErrores=['respuesta'=> '',
           'mensajeError'=> ''
           ];


if(isset($_GET['descUsuario'])){
    
    $oUsuario= UsuarioPDO::buscarUsuarioPorDesc($_GET['codDepartamento']);
    if($oUsuario){
        $i = 0;
        foreach ($oUsuario as $resultado) {
            $aUsuarios[$i]['codUsuario'] = $resultado->get_codUsuario();
            $aUsuarios[$i]['descUsuario'] = $resultado->get_descUsuario();
            $aUsuarios[$i]['numConexiones'] = $resultado->get_numConexiones();
            $aUsuarios[$i]['fechaHoraUltimaConexion'] = $resultado->get_fechaHoraUltimaConexion();
            $aUsuarios[$i]['fechaHoraUltimaConexionAnterior'] = $resultado->get_fechaHoraUltimaConexionAnterior();
            $aUsuarios[$i]['perfil'] = $resultado->get_perfil();
            $aUsuarios[$i]['imagen'] = $resultado->get_imagenUsuario();

            $i++;
        }
    }else{
        $aErrores['respuesta']= 'false';
        $aErrores['mensajeError']="No existe ese usuario";
        $entradaOk=false;
    }
}else{
    $aErrores['respuesta']= 'false';
    $aErrores['mensajeError']= "Ha se ha encontrado ningun parámetro";
    $entradaOk=false;
}

if($entradaOk){
    echo json_encode($aUsuarios);
}else{
    echo json_encode($aErrores);
}

?>