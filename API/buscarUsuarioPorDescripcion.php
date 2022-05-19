<?php

require_once '../config/confDBPDO.php';
require_once '../model/DB.php';
require_once '../model/DBPDO.php';
require_once '../model/AppError.php';
require_once '../model/Usuario.php';
require_once '../model/UsuarioDB.php';
require_once '../model/UsuarioPDO.php';


$aResultado = [];


if(isset($_GET['descUsuario'])){
    
    $aUsuarios= UsuarioPDO::buscarUsuarioPorDescripcion($_GET['descUsuario']);
    if($aUsuarios){
        $aResultado=['respuesta'=> true,
                    'usuarios'=>$aUsuarios
                    ];
            
        
    }else{
        $aResultado=['respuesta'=> false,
                    'mensajeError'=>"No existe ese usuario"
            ];
    }
}else{
    $aResultado=[ 'respuesta'=> false,
                 'mensajeError'=>"Ha se ha encontrado ningun parametro"
            ];
}

$json_pretty = json_encode($aResultado, JSON_PRETTY_PRINT);
echo "<pre>".$json_pretty."<pre/>";




//http://daw212.sauces.local/212DWESAplicacionFinalJohanna/API/buscarUsuarioPorDescripcion.php?descUsuario=
?>