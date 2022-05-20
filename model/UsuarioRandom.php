<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 11/05/2022
    * Aplicacion final
    */

class UsuarioRandom{
    private $foto;
    private $nombre;
    private $apellido;
    private $calle;
    private $pais;
    private $email;
    private $edad;
    
    public function __construct($foto, $nombre, $apellido, $calle, $pais, $email, $edad) {
        $this->foto = $foto;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->calle = $calle;
        $this->pais = $pais;
        $this->email = $email;
        $this->edad = $edad;
    }
    
    function getFoto() {
        return $this->foto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCalle() {
        return $this->calle;
    }

    function getPais() {
        return $this->pais;
    }

    function getEmail() {
        return $this->email;
    }

    function getEdad() {
        return $this->edad;
    }

////////////////////////////////////SET///////////////////////////////////////
    function setFoto($foto){
        $this->foto = $foto;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }

    function setCalle($calle){
        $this->calle = $calle;
    }

    function setPais($pais){
        $this->pais = $pais;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function setEdad($edad){
        $this->edad = $edad;
    }



    
}
?>