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
    $aErrores['mensajeError']= "Ha se ha encontrado ningun parámetro";
    $entradaOk=false;
}
$json_pretty = json_encode($aDepartamento, JSON_PRETTY_PRINT);
$json_pretty1 = json_encode($aErrores, JSON_PRETTY_PRINT);

if($entradaOk){
    echo "<pre>".$json_pretty."<pre/>";
}else{
    echo "<pre>".$json_pretty1."<pre/>";
}

?>