<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */

class DepartamentoPDO{
    
    public static function buscarDepartamentoPorCodigo1($codDepartamento){
        $consulta = <<<HER
                        SELECT * FROM T02_Departamento
                        WHERE T02_CodDepartamento like '%".$codDepartamento."%'"; 
                    HER;
        
        $resultado= DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        $oDepartamento= $resultado->fetchObject();// Guardo en la variable el resultado de la consulta en forma de objeto
        
        if($oDepartamento){ // si la consulta me devuleve algun resultado es que existe el usuario
           return new Departamento($oDepartamento->T02_CodDepartamento, $oDepartamento->T02_DescDepartamento, $oDepartamento->T02_FechaCreacionDepartamento, $oDepartamento->T02_VolumenNegocio);
        }else{
            return false; 
        }
    }
    public static function buscarDepartamentoPorCodigo2(){
        $consulta = <<<HER
                        SELECT * FROM T02_Departamento; 
                    HER;
        
        $resultado= DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        $oDepartamento= $resultado->fetchObject();// Guardo en la variable el resultado de la consulta en forma de objeto
        
        if($oDepartamento){ // si la consulta me devuleve algun resultado es que existe el usuario
           return new Departamento($oDepartamento->T02_CodDepartamento, $oDepartamento->T02_DescDepartamento, $oDepartamento->T02_FechaCreacionDepartamento, $oDepartamento->T02_VolumenNegocio);
        }else{
            return false; 
        }
    }
}
?>
