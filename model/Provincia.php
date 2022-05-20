<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 11/05/2022
    * Aplicacion final
    */

class Provincia{
    private $provincia;
    private $idProvincia;
    private $descripcionProvincia;
    private $tiempo;
    private $temperaturaMaxima;
    private $temperaturaMinima;
    
    function __construct($provincia, $idProvincia, $descripcionProvincia, $tiempo, $temperaturaMaxima, $temperaturaMinima) {
        $this->provincia = $provincia;
        $this->idProvincia = $idProvincia;
        $this->descripcionProvincia = $descripcionProvincia;
        $this->tiempo = $tiempo;
        $this->temperaturaMaxima = $temperaturaMaxima;
        $this->temperaturaMinima = $temperaturaMinima;
    }
    
    function getProvincia() {
        return $this->provincia;
    }

    function getIdProvincia() {
        return $this->idProvincia;
    }

    function getDescripcionProvincia() {
        return $this->descripcionProvincia;
    }

    function getTiempo() {
        return $this->tiempo;
    }

    function getTemperaturaMaxima() {
        return $this->temperaturaMaxima;
    }

    function getTemperaturaMinima() {
        return $this->temperaturaMinima;
    }

//////////////////////////SET////////////////////////////////////////////////////////////////////////////
    
    function setProvincia($provincia){
        $this->provincia = $provincia;
    }

    function setIdProvincia($idProvincia){
        $this->idProvincia = $idProvincia;
    }

    function setDescripcionProvincia($descripcionProvincia){
        $this->descripcionProvincia = $descripcionProvincia;
    }

    function setTiempo($tiempo){
        $this->tiempo = $tiempo;
    }

    function setTemperaturaMaxima($temperaturaMaxima){
        $this->temperaturaMaxima = $temperaturaMaxima;
    }

    function setTemperaturaMinima($temperaturaMinima){
        $this->temperaturaMinima = $temperaturaMinima;
    }


    
    
}
?>