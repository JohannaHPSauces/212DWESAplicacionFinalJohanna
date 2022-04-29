<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */

interface DB {
   
    public static function ejecutarConsulta($sentenciaSQL, $parametros);
}

?>
