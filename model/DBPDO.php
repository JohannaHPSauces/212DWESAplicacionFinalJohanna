<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */


class DBPDO implements DB{
    
    public static function ejecutarConsulta($sentenciaSQL, $parametros=null) {
        
        try{
            $miDB= new PDO(HOST, USER, PASSWORD); //Objeto para establecer la conexion
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Establezco los atributos para la conexion
            
            $resultadoConsuta= $miDB->prepare($sentenciaSQL); //preparo la consulta
            $resultadoConsuta->execute($parametros); //ejecuto parametros si existen
            
            return $resultadoConsulta; 
        } catch (PDOException $excepcion) {
            $codigoError = $excepcion->getCode(); //Guardamos en una variable el codigo del error
            $mensajeError = $excepcion->getMessage(); //guardamos en una variable el mensaje del error 

            echo "<p style='background-color:red'> Codigo de error: ".$codigoError;     //Mostramos el error
            echo "<p style='background-color: red;'> Mensaje de error:". $mensajeError; //Mostramos el mensaje de error

        }finally{//Para finalizar cerramos la conexion a la base de datos
            unset($miDB);
        }

        }
}

?>
