<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 11/05/2022
    * Aplicacion final
    */


class REST {
    
    public static function tiempoProvincia($codProvincia){
        $oProvincia= null; //Inicializamos el objeto Provincia a null
        $sResultadoRawData= false; //Variable de tipo string que contendra el json
        //get_headers-> devuelve un Array con las cabeceras enviadas por el servidor en respuesta a una peticion HTTP.
        $aHeaders= get_headers("https://www.el-tiempo.net/api/json/v2/provincias/{$codProvincia}");
        //substr -> Devuelve una parta del string que esta entre los parametros start y lenght
        $numHeaders= substr($aHeaders[0],9,3);
        if($numHeaders== "200"){
             $sResultadoRawData = @file_get_contents("https://www.el-tiempo.net/api/json/v2/provincias/{$codProvincia}");
        }
        
        if($sResultadoRawData){
            //json_decode -> decodifica un JSON
            $aJson= json_decode($sResultadoRawData, true);//Guardamos el resultado decodificado en un array
            
            $oProvincia= new Provincia(
                $aJson['title'],
                $aJson['ciudades']['0']['idProvince'],
                $aJson['ciudades']['0']['stateSky']['description'],
                $aJson['today']['p'],
                $aJson['ciudades']['0']['temperatures']['max'],
                $aJson['ciudades']['0']['temperatures']['min']
            );
        }
        return $oProvincia;
    }
    
     public static function usuario($numUsuarios){
        $oUsuario= null; //Inicializamos el objeto Provincia a null
        $sResultadoRawData= false; //Variable de tipo string que contendra el json
        //get_headers-> devuelve un Array con las cabeceras enviadas por el servidor en respuesta a una peticion HTTP.
        $aHeaders= get_headers("https://randomuser.me/api/?results={$numUsuarios}");
        //substr -> Devuelve una parta del string que esta entre los parametros start y lenght
        $numHeaders= substr($aHeaders[0],9,3);
        if($numHeaders== "200"){
             $sResultadoRawData = @file_get_contents("https://randomuser.me/api/?results={$numUsuarios}");
        }
        //https://randomuser.me/api/?format=json
        if($sResultadoRawData){
            //json_decode -> decodifica un JSON
            $aJson= json_decode($sResultadoRawData, true);//Guardamos el resultado decodificado en un array
            
            
                $oUsuario= new UsuarioRandom(
                    $aJson['results']['0']['picture']['large'],
                    $aJson['results']['0']['name']['first'],
                    $aJson['results']['0']['name']['last'],
                    $aJson['results']['0']['location']['street']['name'],
                    $aJson['results']['0']['location']['country'],
                    $aJson['results']['0']['email'],
                    $aJson['results']['0']['dob']['age']
                );
            
        }
        return $oUsuario;
    }
}

?>

