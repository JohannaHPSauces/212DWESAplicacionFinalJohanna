<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Interfaz de usuario
     * 
    */

interface UsuarioBD {
    /**
     * 
     * Funcion que sirve para validar datos del usuario
     * 
     * @param string $codUsuario
     * @param string $password
     */
    public static function validarUsuario($codUsuario, $password);
}

?>