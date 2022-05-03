<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */

class DepartamentoPDO{
    
    public static function buscarDepartamentoPorDescripcion($desDepartamento= ''){
        $consulta = <<<HER
                       SELECT * FROM T02_Departamento WHERE T02_DescDepartamento  LIKE '%{$desDepartamento}%';
                    HER;
        
        $resultado= DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        $aDepartamentos= $resultado->fetchAll();
        
        $aRespuesta = [];
        if($aDepartamentos){
            foreach ($aDepartamentos as $oDepartamento) {
                $aRespuesta[$oDepartamento['T02_CodDepartamento']] = new Departamento(
                    $oDepartamento['T02_CodDepartamento'],
                    $oDepartamento['T02_DescDepartamento'],
                    $oDepartamento['T02_VolumenNegocio'],
                    $oDepartamento['T02_FechaCreacionDepartamento'],
                    $oDepartamento['T02_FechaBajaDepartamento']
                );
            }
            return $aRespuesta;
        }else{
            return false;
        }
    }
        
    
}
?>
