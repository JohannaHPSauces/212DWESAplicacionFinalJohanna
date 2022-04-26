<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */

class UsuarioPDO implements UsuarioBD{
    
    public static function validarUsuario($codUsuario, $password){
        $consulta = <<<HER
                        SELECT * FROM T01_Usuario 
                        WHERE T01_CodUsuario='{$codUsuario}' 
                        AND T01_Password=SHA2("{$codUsuario}{$password}", 256); 
                    HER;
        
        $resultado= DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        
        if($resultado->rowCount()>0){ // si la consulta me devuleve algun resultado es que existe el usuario
            $oUsuario = $resultado->fetchObject(); // Guardo en la variable el resultado de la consulta en forma de objeto
            
            if($oUsuario){ //Instancio un nuevo objeto usuario con todos sus datos
                return new Usuario($oUsuario->T01_CodUsuario, $oUsuario->T01_Password, $oUsuario->T01_DescUsuario, $oUsuario->T01_NumConexiones, $oUsuario->T01_FechaHoraUltimaConexion,null, $oUsuario->T01_ImagenUsuario, $oUsuario->T01_Perfil);
            }
        } 
    }
    public static function registrarUltimaConexion($oUsuario) {
        $consulta = <<<HER
                        UPDATE T01_Usuario 
                        SET T01_NumConexiones=T01_NumConexiones+1, T01_FechaHoraUltimaConexion=unix_timestamp() 
                        WHERE T01_CodUsuario='{$oUsuario->getCodUsuario()}';
                    HER;
            
        DBPDO::ejecutarConsulta($consulta);
        //Actualizar objeto usuario
        $oUsuario->setNumConexiones($oUsuario->getNumConexiones()+1);
        $oUsuario->setFechaHoraUltimaConexionAnterior($oUsuario->getFechaHoraUltimaConexion());
        
        return $oUsuario; //usuario actualizado
    }
    
    public static function altaUsuario(){}
    public static function validarCodNoExiste(){}
    public static function modificarUsuario(){}
    public static function modificarPassword(){}
        
    
}
?>
