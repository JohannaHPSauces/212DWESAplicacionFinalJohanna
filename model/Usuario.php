<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Nos que nos permite crear objetos de la clase usuario
    */

class Usuario{
    /**
     *
     * @var string 
     */
    private $codUsuario;
    /**
     *
     * @var string 
     */
    private $password;
    /**
     *
     * @var string 
     */
    private $descUsuario;
    /**
     *
     * @var int 
     */
    private $numConexiones;
    /**
     *
     * @var int 
     */
    private $fechaHoraUltimaConexion;
    /**
     *
     * @var int 
     */
    private $fechaHoraUltimaConexionAnterior;
    /**
     *
     * @var string 
     */
    private $imagenUsuario;
    /**
     *
     * @var string 
     */
    private $perfil;
    
    /**
     * 
     * Constructor de la clase
     * 
     * @param string $codUsuario
     * @param string $password
     * @param string $descUsuario
     * @param int $numConexiones
     * @param int $fechaHoraUltimaConexion
     * @param int $fechaHoraUltimaConexionAnterior
     * @param string $imagenUsuario
     * @param string $perfil
     */
    function __construct($codUsuario,$password,$descUsuario,$numConexiones,$fechaHoraUltimaConexion,$fechaHoraUltimaConexionAnterior,$imagenUsuario,$perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numConexiones = $numConexiones;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        $this->imagenUsuario = $imagenUsuario;
        $this->perfil = $perfil;
    }
    /**
     * 
     * Metodo getCodUsuario()
     * 
     * @return string
     * 
     */
    function getCodUsuario(){
        return $this->codUsuario;
    }
    /**
     * 
     * Metodo getPassword()
     * 
     * @return string
     * 
     */
    function getPassword() {
        return $this->password;
    }
    /**
     * 
     * Metodo getDescUsuario()
     * 
     * @return string
     * 
     */
    function getDescUsuario() {
        return $this->descUsuario;
    }
    /**
     * 
     * Metodo getNumConexiones()
     * 
     * @return int
     * 
     */
    function getNumConexiones() {
        return $this->numConexiones;
    }
    /**
     * 
     * Metodo getFechaHoraUltimaConexion()
     * 
     * @return int
     * 
     */
    function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }
    /**
     * 
     * Metodo getFechaHoraUltimaConexionAnterior()
     * 
     * @return int
     * 
     */
    function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }
    /**
     * 
     * Metodo getImagenUsuario()
     * 
     * @return string
     * 
     */
    function getImagenUsuario(){
        return $this->imagenUsuario;
    }
    /**
     * 
     * Metodo getPerfil()
     * 
     * @return string
     * 
     */
    function getPerfil() {
        return $this->perfil;
    }
////////////////////////////////////////////////////////////////////////////////
    /**
     * Metodo setCodUsuario()
     * 
     * Nos permite cambiar el valor de $codUsuario
     *  
     * @param string $codUsuario
     * 
     */
    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }
   /**
     * Metodo setPassword()
     * 
     * Nos permite cambiar el valor de $password
     *  
     * @param string $password
    * 
     */
    function setPassword($password) {
        $this->password = $password;
    }
    /**
     * Metodo setDescUsuario()
     * 
     * Nos permite cambiar el valor de $descUsuario
     *  
     * @param string $descUsuario
     * 
     */
    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }
    /**
     * Metodo setNumConexiones()
     * 
     * Nos permite cambiar el valor de $numConexiones
     *  
     * @param int $numConexiones
     * 
     */
    function setNumConexiones($numConexiones) {
        $this->numConexiones = $numConexiones;
    }
    /**
     * Metodo setFechaHoraUltimaConexion()
     * 
     * Nos permite cambiar el valor de $fechaHoraUltimaConexion
     *  
     * @param int $fechaHoraUltimaConexion
     */
    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion) {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }
    /**
     * Metodo setFechaHoraUltimaConexionAnterior()
     * 
     * Nos permite cambiar el valor de $fechaHoraUltimaConexionAnterior
     *  
     * @param int $fechaHoraUltimaConexionAnterior
     */
    function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior) {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
    }
    /**
     * Metodo imagenUsuario()
     * 
     * Nos permite cambiar el valor de $imagenUsuario
     *  
     * @param int $imagenUsuario
     */
    function imagenUsuario($imagenUsuario){
        $this->imagenUsuario = $imagenUsuario;
    }
    /**
     * Metodo setPerfil()
     * 
     * Nos permite cambiar el valor de $perfil
     *  
     * @param string $perfil
     */
    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
}
?>