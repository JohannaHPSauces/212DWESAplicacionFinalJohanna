<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 11/05/2022
    * Nos permite crear objetos de la clase provincia
     * 
    */

class Provincia{
    /**
     *
     * @var string 
     */
    private $provincia;
    /**
     *
     * @var int 
     */
    private $idProvincia;
    /**
     *
     * @var string 
     */
    private $descripcionProvincia;
    /**
     *
     * @var string 
     */
    private $tiempo;
    /**
     *
     * @var int
     */
    private $temperaturaMaxima;
    /**
     *
     * @var int
     */
    private $temperaturaMinima;
    
    /**
     * 
     * Constructor de la clase 
     * 
     * @param string $provincia
     * @param int $idProvincia
     * @param string $descripcionProvincia
     * @param string $tiempo
     * @param int $temperaturaMaxima
     * @param int $temperaturaMinima
     * 
     */
    function __construct($provincia, $idProvincia, $descripcionProvincia, $tiempo, $temperaturaMaxima, $temperaturaMinima) {
        $this->provincia = $provincia;
        $this->idProvincia = $idProvincia;
        $this->descripcionProvincia = $descripcionProvincia;
        $this->tiempo = $tiempo;
        $this->temperaturaMaxima = $temperaturaMaxima;
        $this->temperaturaMinima = $temperaturaMinima;
    }
    /**
     * 
     * Metodo getProvincia()
     * 
     * @return string
     */
    function getProvincia() {
        return $this->provincia;
    }
    /**
     * 
     * Metodo getIdProvincia()
     * 
     * @return int
     * 
     */
    function getIdProvincia() {
        return $this->idProvincia;
    }
    /**
     * 
     * Metodo getDescripcionProvincia()
     * 
     * @return string
     * 
     */
    function getDescripcionProvincia() {
        return $this->descripcionProvincia;
    }
    /**
     * 
     * Metodo getTiempo()
     * 
     * @return string
     * 
     */
    function getTiempo() {
        return $this->tiempo;
    }
    /**
     * 
     * Metodo getTemperaturaMaxima()
     * 
     * @return int
     * 
     */
    function getTemperaturaMaxima() {
        return $this->temperaturaMaxima;
    }
    /**
     * 
     * Metodo getTemperaturaMinima()
     * 
     * @return int
     * 
     */
    function getTemperaturaMinima() {
        return $this->temperaturaMinima;
    }
}
?>