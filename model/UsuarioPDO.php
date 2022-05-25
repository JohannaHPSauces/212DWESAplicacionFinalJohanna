<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Clase UsuarioPDO
    * 
    * Contiene funciones que usaremos para hacer las consultas
    */

class UsuarioPDO implements UsuarioBD{
    /**
     * 
     * function validarUsuario()
     * 
     * Funcion que valida si existe un usuario o no
     * 
     * @param string $codUsuario
     * @param string $password
     * @return \Usuario devuelve el usuario si existe
     * 
     */
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
    /**
     * 
     * function buscaUsuariosporDesc()
     * 
     * Funcion que busca un usuario por descripcion
     * 
     * @param string $sDescUsuarios
     * @return boolean|\Usuario devuelve el usuario si lo ha encontrado y si no, devuelve false
     * 
     */
    public static function buscaUsuariosporDesc($sDescUsuarios){
         $sSelect = <<<QUERY
            SELECT * FROM T01_Usuario
            WHERE T01_DescUsuario LIKE '%{$sDescUsuarios}%';
QUERY;

        $oResultado = DBPDO::ejecutarConsulta($sSelect);
        $aUsuarios = $oResultado->fetchAll();
        if ($aUsuarios) {
            $aDevolucion = [];
            /*
             * Creación de cada usuario en objeto y añadido al array de devolución
             * de usuarios con el código de usuario como key en el array.
             */
            foreach ($aUsuarios as $oUsuario) {
                $aDevolucion[$oUsuario['T01_CodUsuario']] = new Usuario(
                        $oUsuario['T01_CodUsuario'],
                        $oUsuario['T01_Password'],
                        $oUsuario['T01_DescUsuario'],
                        $oUsuario['T01_NumConexiones'], 
                        $oUsuario['T01_FechaHoraUltimaConexion'],
                        $oUsuario['T01_FechaHoraUltimaConexion'],
                        $oUsuario['T01_Perfil'],
                        $oUsuario['T01_ImagenUsuario']);
            }
            return $aDevolucion;
        } else {
            return false;
        }
    }
    /**
     * 
     * function registrarUltimaConexion()
     * 
     * Funcion que crea una fecha de ultima conexion al usuario
     * 
     * @param $oUsuario
     * @return el usuario actualizado
     * 
     */
    public static function registrarUltimaConexion($oUsuario) {
        //Actualizar objeto usuario
        $oUsuario->setFechaHoraUltimaConexionAnterior($oUsuario->getFechaHoraUltimaConexion());
        $oUsuario->setFechaHoraUltimaConexion(time());
        $oUsuario->setNumConexiones($oUsuario->getNumConexiones()+1);
        
        $consulta = <<<HER
                        UPDATE T01_Usuario SET T01_NumConexiones={$oUsuario->getNumConexiones()},
                        T01_FechaHoraUltimaConexion= {$oUsuario->getFechaHoraUltimaConexion()}
                        WHERE T01_CodUsuario='{$oUsuario->getCodUsuario()}';
                    HER;
            
        DBPDO::ejecutarConsulta($consulta);
        
        return $oUsuario; //DEVUELVO usuario actualizado
    }
    /**
     * 
     * function modificarUsuario()
     * 
     * Funcion que modifica la descripcion de un usuario()
     * 
     * @param  $oUsuario
     * @param string $descUsuario
     * @return boolean si no se ha podido modificar devuelve false
     * 
     */
    public static function modificarUsuario($oUsuario, $descUsuario){
        $consulta = <<<HER
                        UPDATE T01_Usuario SET T01_DescUsuario="{$descUsuario}" WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
                    HER;
                        
        //Actualizar objeto usuario 
        $oUsuario->setDescUsuario($descUsuario);
        
        if(DBPDO::ejecutarConsulta($consulta)){
            return $oUsuario;
        }else{
            return false;
        }
    }
    /**
     * 
     * function altaUsuario()
     * 
     * Funcion que crea un nuevo usuario
     * 
     * @param string $codUsuario
     * @param string $password
     * @param strign $descUsuario
     * @return boolean|\Usuario si no se ha apodido crear devuelve false
     * 
     */
    public static function altaUsuario($codUsuario,$password, $descUsuario ){
        $consulta= <<<HER
                    INSERT INTO T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario, T01_FechaHoraUltimaConexion)
                    VALUES ("{$codUsuario}", SHA2("{$codUsuario}{$password}", 256),"{$descUsuario}", UNIX_TIMESTAMP());
                    HER;
        if(DBPDO::ejecutarConsulta($consulta)){
            return new Usuario($codUsuario, $password, $descUsuario, 1, time(), null, null,"usuario",);
        }else{
            return false;
        }
    }
    /**
     * 
     * function validarCodNoExiste()
     * 
     * Funcion que busca un usuario por codigo
     * 
     * @param string $codUsuario
     * 
     */
    public static function validarCodNoExiste($codUsuario){
        $consulta= <<<HER
                        SELECT T01_CodUsuario FROM T01_Usuario WHERE T01_CodUsuario='{$codUsuario}';
                    HER;
                        
        return DBPDO::ejecutarConsulta($consulta)->fetchObject();
    }
    /**
     * 
     * function borrarCuenta()
     * 
     * Funcion que borra un usuario
     * 
     * @param $oUsuario
     * 
     */
    public static function borrarCuenta($oUsuario){
        $consulta = <<<HER
                       DELETE FROM T01_Usuario WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
                    HER;
        DBPDO::ejecutarConsulta($consulta);
    }
    /**
     * 
     * function modificarPassword()
     * 
     * Funcion que nos permite modificar la contraseña de un usuario
     * 
     * @param $oUsuario
     * @param string $password
     * @return boolean si no se ha podido modificar devuelve false
     * 
     * 
     */
    public static function modificarPassword($oUsuario, $password){
        //Consulta SQL para modificar la descripcion de un usuario
        $consulta = <<<HER
                        UPDATE T01_Usuario SET T01_Password=SHA2("{$oUsuario->getCodUsuario()}{$password}", 256)
                        WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
                    HER;
                        
        //Actualizar objeto usuario    
        $oUsuario->setPassword($password);
        
        if(DBPDO::ejecutarConsulta($consulta)){
            return $oUsuario;
        }else{
            return false;
        }
    } 
}
?>