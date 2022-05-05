<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */

class DepartamentoPDO{
    public const DEPARTAMENTOS_BAJA = 1;
    public const DEPARTAMENTOS_ALTA = 2;
    public const DEPARTAMENTOS_TODOS = 0;
    
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
    public static function buscarDepartamento(){
        $consulta = <<<HER
                       SELECT * FROM T02_Departamento;
                    HER;
        
        $resultado= DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        $aDepartamentos= $resultado->fetchAll();//Devuelve un array que contiene todas las filas del conjunto de resultados
        
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
    
    public static function buscarDepartamentoPorCodigo($codDepartamento){
        $consulta = <<<HER
                        SELECT * FROM T02_Departamento
                        WHERE T02_CodDepartamento='{$codDepartamento}'; 
                    HER;
        
        $resultado= DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        
        if($resultado->rowCount()>0){ // si la consulta me devuleve algun resultado es que existe el usuario
            $oDepartamento = $resultado->fetchObject(); // Guardo en la variable el resultado de la consulta en forma de objeto
            
            if($oDepartamento){ //Instancio un nuevo objeto usuario con todos sus datos
                return new Departamento($oDepartamento->T02_CodDepartamento, $oDepartamento->T02_DescDepartamento, $oDepartamento->T02_VolumenNegocio, $oDepartamento->T02_FechaCreacionDepartamento, null);
            }
        } 
    }
    
    public static function buscarDepartamentoPorEstado($desDepartamento='', $estado= 0){
        switch ($estado){
            case 0:
                $estados = '';
                break;
            case 1:
                $estados = 'AND T02_FechaBajaDepartamento IS NULL';
                break;
            case 2:
                $estados = 'AND T02_FechaBajaDepartamento IS NOT NULL';
                break;
        }
        $consulta = <<<HER
                      SELECT * FROM T02_Departamento 
                      WHERE T02_DescDepartamento  LIKE '%{$desDepartamento}%' {$estados};
                    HER;
        
        $resultado= DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        $aDepartamentos= $resultado->fetchAll(); //Devuelve un array que contiene todas las filas del conjunto de resultados
        
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
    
    public static function bajaLogicaDepartamento($codDepartamento){
        $consulta= <<<HER
                     UPDATE T02_Departamento SET T02_FechaBajaDepartamento =UNIX_TIMESTAMP()
                     WHERE T02_CodDepartamento = '{$codDepartamento}';
                    HER;
                     
        return DBPDO::ejecutarConsulta($consulta);
    }
    
    public static function rehabilitarDepartamento($codDepartamento){
        $consulta= <<<HER
                     UPDATE T02_Departamento SET T02_FechaBajaDepartamento = null 
                     WHERE T02_CodDepartamento = '{$codDepartamento}';
                    HER;
                     
        return DBPDO::ejecutarConsulta($consulta);
    }
    
    
    public static function borrarDepartamento($codDepartamento){
        $consulta = <<<HER
                       DELETE FROM T02_Departamento WHERE T02_CodDepartamento="{$codDepartamento}";
                    HER;
        DBPDO::ejecutarConsulta($consulta);
    }  
    
    public static function modificarDepartamento($codDepartamento, $descDepartamento, $volumenNegocio){
        $consulta = <<<HER
                        UPDATE T02_Departamento SET T02_DescDepartamento = '{$descDepartamento}', 
                        T02_VolumenNegocio = {$volumenNegocio}
                        WHERE T02_CodDepartamento = '{$codDepartamento}';
                    HER;
                        
        return DBPDO::ejecutarConsulta($consulta);
           
    }
    
    public static function altaDepartamento($codDepartamento,$desDepartamento, $volumenNegocio ){
        $consulta= <<<HER
                    INSERT INTO T02_Departamento(T02_CodDepartamento, T02_DescDepartamento, T02_VolumenNegocio, T02_FechaCreacionDepartamento)
                    VALUES ("{$codDepartamento}", "{$desDepartamento}","{$volumenNegocio}", UNIX_TIMESTAMP());
                    HER;
        if(DBPDO::ejecutarConsulta($consulta)){
            return new Departamento($codDepartamento, $password, $desDepartamento, $volumenNegocio, time(), null);
        }else{
            return false;
        }
    }
    
}
?>
