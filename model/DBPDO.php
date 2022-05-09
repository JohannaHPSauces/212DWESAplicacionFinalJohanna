<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */


class DBPDO implements DB{
    
     public static function ejecutarConsulta($sentenciaSQL, $parametros = null){
        try {
            $miDB = new PDO(HOST, USER, PASSWORD);//Hago la conexion con la base de datos
            $miDB -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// Establezco el atributo para la aparicion de errores con ATTR_ERRMODE y le pongo que cuando haya un error se lance una excepcion con ERRMODE_EXCEPTION
            $resultadoConsulta = $miDB->prepare($sentenciaSQL); // Preparo la consulta antes de ejecutarla
            $resultadoConsulta -> execute($parametros);//Ejecuto la consulta con el array de parametros
            return $resultadoConsulta; //Devuelvo el resultado de la consulta
        }catch(PDOException $excepcion){//Codigo que se ejecuta si hay algun error
            $_SESSION['error']= new AppError($excepcion->getCode(), $excepcion->getMessage(), $excepcion->getFile(), $excepcion->getLine(), $_SESSION['paginaAnterior']);//Creo un nuevo objeto error
            $_SESSION['paginaEnCurso'] = 'error'; //Guardo en la ventana en curso la pagina de error
            header('Location: index.php');
            exit;
        } finally{
            unset($miDB);//Cierro la conexion
        }
    }
}

?>
