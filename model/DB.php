<?php
    /**
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Interfaz DB
     * 
    */

interface DB {
   /**
    * 
    * Funcion ejecutarConsulta()
    * 
    * @param type $sentenciaSQL-> sentencia de tipo SQL que vamos a ejecutar
    * @param type $parametros
    */
    public static function ejecutarConsulta($sentenciaSQL, $parametros);
}

?>
