<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Clase DepartamentoPDO
    * 
    * Contiene funciones que usaremos para hacer las consultas
    * 
    */

class DepartamentoPDO{
    public const DEPARTAMENTOS_BAJA = 2;
    public const DEPARTAMENTOS_ALTA = 1;
    public const DEPARTAMENTOS_TODOS = 0;
    /**
     * 
     * function buscarDepartamentoPorDescripcion()
     * 
     * Esta funcion nos premite buscar departamentos por descripcion
     * 
     * @param string $desDepartamento
     * @return boolean|\Departamento si lo existe devuelve los datos del departamento si no existe devuelve false
     * 
     */
    public static function buscarDepartamentoPorDescripcion($desDepartamento= ''){
        $aRespuesta = [];
        $consulta = <<<HER
                       SELECT * FROM T02_Departamento WHERE T02_DescDepartamento  LIKE '%{$desDepartamento}%';
                    HER;
        
        $resultado= DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        $aDepartamentos= $resultado->fetchAll();
        
        
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
    /**
     * 
     * function buscarDepartamento()
     * 
     * Esta funcion nos permite buscar departamentos
     * 
     * @return boolean|\Departamento si lo existe devuelve los datos del departamento si no existe devuelve false
     * 
     */
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
    /**
     * 
     * function buscarDepartamentoPorCodigo()
     * 
     * Funcion que busca departamentos por codigo
     * 
     * @param string $codDepartamento
     * @return \Departamento si lo existe devuelve los datos del departamento si no existe devuelve false
     * 
     */
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
    /**
     * 
     * function buscarDepartamentoPorDesYEstadoPaginado()
     * 
     * Funcion que busca un departamento por descripcion y estado y muestra el resultado paginado
     * 
     * @param string $sBusqueda
     * @param int $iEstado
     * @param int $numPagBuscada
     * @return boolean|\Departamento si lo existe devuelve los datos del departamento si no existe devuelve false
     * 
     */
    public static function buscarDepartamentoPorDesYEstadoPaginado($sBusqueda='', $iEstado =0, $numPagBuscada=1 ) {
        //$iPagina = $iPagina*3;
        $numPagBuscada = ($numPagBuscada-1)*3;
        switch ($iEstado){ 
            case 0:
                $estado = '';
                break;
            case 1:
                $estado = 'AND T02_FechaBajaDepartamento IS NULL';
                break;
            case 2:
                $estado = 'AND T02_FechaBajaDepartamento IS NOT NULL';
                break;
        }

        $consulta = <<<HER
                        SELECT * FROM T02_Departamento
                        WHERE T02_DescDepartamento LIKE '%{$sBusqueda}%'{$estado}  LIMIT 3 OFFSET {$numPagBuscada};
                    HER;
        $oResultado= DBPDO::ejecutarConsulta($consulta);
        $aDepartamentos = $oResultado->fetchAll();
        if ($aDepartamentos) {
            $aRespuesta = [];
           
            foreach ($aDepartamentos as $oDepartamento) {
                $aRespuesta[$oDepartamento['T02_CodDepartamento']] = new Departamento(
                        $oDepartamento['T02_CodDepartamento'],
                        $oDepartamento['T02_DescDepartamento'],
                        $oDepartamento['T02_VolumenNegocio'],
                        $oDepartamento['T02_FechaCreacionDepartamento'],
                        $oDepartamento['T02_FechaBajaDepartamento']);
            }
            return $aRespuesta;
        } else {
            return false;
        }
    }
    /**
     * 
     * function contarDepartamentosTotales()
     * 
     * Funcion que cuenta el numero de departamentos y los divide por el numero de departamentos que qeremos que salga por pagina
     * 
     * @param string $sBusqueda
     * @param int $iEstado
     * @return int 
     * 
     */
    public static function contarDepartamentosTotales($sBusqueda='', $iEstado =0) {
       switch ($iEstado){ 
            case 0:
                $estado = '';
                break;
            case 1:
                $estado = 'AND T02_FechaBajaDepartamento IS NULL';
                break;
            case 2:
                $estado = 'AND T02_FechaBajaDepartamento IS NOT NULL';
                break;
        }

        $consulta = <<<HER
                        SELECT COUNT(*) FROM T02_Departamento
                        WHERE T02_DescDepartamento LIKE '%{$sBusqueda}%'{$estado};
                    HER;
        $oResultado= DBPDO::ejecutarConsulta($consulta);
        $aDepartamentos = $oResultado->fetch();
        return ceil(intval($aDepartamentos[0])/3);
    }
    /**
     * 
     * function bajaLogicaDepartamento()
     * 
     * Funcion que sirve para dar de baja un departamento
     * 
     * @param string $codDepartamento
     * @return resultado de la consulta
     * 
     */
    public static function bajaLogicaDepartamento($codDepartamento){
        $consulta= <<<HER
                     UPDATE T02_Departamento SET T02_FechaBajaDepartamento =UNIX_TIMESTAMP()
                     WHERE T02_CodDepartamento = '{$codDepartamento}';
                    HER;
                     
        return DBPDO::ejecutarConsulta($consulta);
    }
    /**
     * 
     * function rehabilitarDepartamento()
     * 
     * Funcion que sirve para dar de alta un departamento
     * 
     * @param string $codDepartamento
     * @return resultado de la consulta
     * 
     */
    public static function rehabilitarDepartamento($codDepartamento){
        $consulta= <<<HER
                     UPDATE T02_Departamento SET T02_FechaBajaDepartamento = null 
                     WHERE T02_CodDepartamento = '{$codDepartamento}';
                    HER;
                     
        return DBPDO::ejecutarConsulta($consulta);
    }
    /**
     * 
     * function borrarDepartamento()
     * 
     * Funcion que sirve para borrar un departamento
     * 
     * @param string $codDepartamento
     * 
     */
    public static function borrarDepartamento($codDepartamento){
        $consulta = <<<HER
                       DELETE FROM T02_Departamento WHERE T02_CodDepartamento="{$codDepartamento}";
                    HER;
        DBPDO::ejecutarConsulta($consulta);
    }  
    /**
     * 
     * function modificarDepartamento()
     * 
     * Funcion que sirve para modificar los datos de un departamento
     * 
     * @param string $codDepartamento
     * @param string $descDepartamento
     * @param int $volumenNegocio
     * @return devuelve el resultado del update
     * 
     */
    public static function modificarDepartamento($codDepartamento, $descDepartamento, $volumenNegocio){
        $consulta = <<<HER
                        UPDATE T02_Departamento SET T02_DescDepartamento = '{$descDepartamento}', 
                        T02_VolumenNegocio = {$volumenNegocio}
                        WHERE T02_CodDepartamento = '{$codDepartamento}';
                    HER;
                        
        return DBPDO::ejecutarConsulta($consulta);
           
    }
    /**
     * 
     * function altaDepartamento()
     * 
     * Funcion que sirve para crear un nuevo departamento
     * 
     * @param string $codDepartamento
     * @param string $desDepartamento
     * @param int $volumenNegocio
     * @return boolean|\Departamento si no se ha podido crear el departamento devuelve false
     * 
     */
    public static function altaDepartamento($codDepartamento,$desDepartamento, $volumenNegocio ){
        $consulta= <<<HER
                    INSERT INTO T02_Departamento(T02_CodDepartamento, T02_DescDepartamento, T02_VolumenNegocio, T02_FechaCreacionDepartamento)
                    VALUES ("{$codDepartamento}", "{$desDepartamento}","{$volumenNegocio}", UNIX_TIMESTAMP());
                    HER;
        if(DBPDO::ejecutarConsulta($consulta)){
            return new Departamento($codDepartamento, $desDepartamento, $volumenNegocio, time(), null);
        }else{
            return false;
        }
    }
}
?>