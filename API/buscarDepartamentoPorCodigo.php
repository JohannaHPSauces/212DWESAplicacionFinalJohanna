<?php

require_once '../config/confDBPDO';
require_once '../model/DB.php';
require_once '../model/DBPDO.php';
require_once '../model/AppError.php';
require_once '../model/Departamento.php';
require_once '../model/DepartamentoPDO.php';


$entradaOk=true;

$aErrores=['respuesta'=> '',
           'mensajeError'=> ''
           ];


if(isset($_GET['codDepartamento'])){
    
    $oDepartamento= DepartamentoPDO::buscarDepartamentoPorCodigo($_GET['codDepartamento']);
    if($oDepartamento){
        $aDepartamento= [
            'respuesta'=> $entradaOk,
            'codDepartamento'=> $oDepartamento->getCodDepartamento(),
            'descDepartamento'=> $oDepartamento->getDescDepartamento(),
            'volumenNegocio'=> $oDepartamento->getVolumenNegocio(),
            'fechaCreacionDepartamento'=> $oDepartamento->getFechaCreacionDepartamento(),
            'fechaBajaDepartamento'=> $oDepartamento->getFechaBajaDepartamento()
        ];
    }else{
        $aErrores['respuesta']= $entradaOk;
        $aErrores['mensajeError']="No existe ese departamento";
        $entradaOk=false;
    }
}else{
    $aErrores['respuesta']= $entradaOk;
    $aErrores['mensajeError']= "Ha habido un problema";
    $entradaOk=false;
}

if($entradaOk){
    echo json_encode($aDepartamento);
}else{
    echo json_encode($aErrores, JSON_PRETTY_PRINT);
}

?>