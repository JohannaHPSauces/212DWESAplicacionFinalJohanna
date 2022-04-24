<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */

class UsuarioPDO implements UsuarioBD{
    
    public static function validarUsuario($codUsuario, $password) {
        $oUsuario=null;
        
        $consulta= <<<HER
                        SELECT * FROM T01_Usuario WHERE
                        T01_CodUsuario= :codUsuario AND 
                        T01_Password=:password;
                    HER;
        $parametros = [':codUsuario' => $codUsuario,
                       ':password' => hash('sha256',($codUsuario.$password))];
        
        $resultadoConsulta= DBPDO::ejecutarConsulta($consulta);
        
        return $oUsuario;
        
    }
    public static function registrarFechaHoraUltimaConexion($oUsuario) {
        
        $consulta= <<<HER
                        UPDATE T01_Usuario SET
                        T01_NumConexiones= T01_NumConexiones+1,
                        T01_FechaHoraUltimaConexion= unix_timestamp()
                        WHERE T01_CodUsuario=:codUsuario";
                    HER;
        $parametros = [':codUsuario'=>$oUsuario->getCodUsuario()];
        
        $resultadoConsulta= DBPDO::ejecutarConsulta($consulta);
        
        //ACTUALIZAR EL OBJETO $oUsuario
        
        $oUsuario->setNumConexiones($oUsuario->getNumConexiones()+1);
        $oUsuario->setFechaHoraUltimaConexion($oUsuario->getFechaHoraUltimaConexion());
        
        return $oUsuario;
    }
    
    public static function altaUsuario(){}
    public static function validarCodNoExiste(){}
    public static function modificarUsuario(){}
    public static function modificarPassword(){}
        
    
}
?>
