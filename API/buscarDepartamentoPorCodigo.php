<?php

require_once '../config/confDBPDO.php';
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
            'respuesta'=> 'true',
            'codDepartamento'=> $oDepartamento->getCodDepartamento(),
            'descDepartamento'=> $oDepartamento->getDescDepartamento(),
            'volumenNegocio'=> $oDepartamento->getVolumenNegocio(),
            'fechaCreacionDepartamento'=> $oDepartamento->getFechaCreacionDepartamento(),
            'fechaBajaDepartamento'=> $oDepartamento->getFechaBajaDepartamento()
        ];
    }else{
        $aErrores['respuesta']= 'false';
        $aErrores['mensajeError']="No existe ese departamento";
        $entradaOk=false;
    }
}else{
    $aErrores['respuesta']= 'false';
    $aErrores['mensajeError']= "Ha habido un problema";
    $entradaOk=false;
}

if($entradaOk){
    echo json_encode($aDepartamento);
}else{
    echo json_encode($aErrores, JSON_PRETTY_PRINT);
}

?>