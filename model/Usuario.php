<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */

class Usuario{
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $imagenUsuario;
    private $perfil;
    
    function __construct($codUsuario,$password,$descUsuario,$numConexiones,$fechaHoraUltimaConexion,$fechaHoraUltimaConexionAnterior,$imagenUsario,$perfil) {
        $this->codUsuario= $this-> $codUsuario;
        $this->password= $this-> $password;
        $this->descUsuario= $this-> $descUsuario;
        $this->numConexiones= $this-> $numConexiones;
        $this->fechaHoraUltimaConexion= $this-> $fechaHoraUltimaConexion;
        $this->fechaHoraUltimaConexionAnterior= $this-> $fechaHoraUltimaConexionAnterior;
        $this->imagenUsuario= $this-> $imagenUsuario;
        $this->perfil= $this-> $perfil;
    }

/////////////////////////////METODOS GET/////////////////////////////    
    function getCodUsuario() {
        return $this->codUsuario;
    }
    function getPassword() {
        return $this->password;
    }

    function getDescUsuario() {
        return $this->descUsuario;
    }

    function getNumConexiones() {
        return $this->numConexiones;
    }

    function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }

    function getImagenUsuario() {
        return $this->imagenUsuario;
    }

    function getPerfil() {
        return $this->perfil;
    }

/////////////////////////////METODOS SET/////////////////////////////    

    function setCodUsuario($codUsuario){
        $this->codUsuario = $codUsuario;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function setDescUsuario($descUsuario){
        $this->descUsuario = $descUsuario;
    }

    function setNumConexiones($numConexiones){
        $this->numConexiones = $numConexiones;
    }

    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion){
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }

    function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior) {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
    }

    function setImagenUsuario($imagenUsuario){
        $this->imagenUsuario = $imagenUsuario;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
}

?>