<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Clase que sirve para crear objetos de la clase departamento
    */

class Departamento{
    /**
     *
     * @var int 
     */
    private $codDepartamento;
    /**
     *
     * @var string 
     */
    private $descDepartamento;
    /**
     *
     * @var int 
     */
    private $volumenNegocio;
    /**
     *
     * @var int 
     */
    private $fechaCreacionDepartamento;
    /**
     *
     * @var int 
     */
    private $fechaBajaDepartamento;
    
    /**
     * 
     * @param string $codDepartamento
     * @param string $descDepartamento
     * @param int $volumenNegocio
     * @param int $fechaCreacionDepartamento
     * @param int $fechaBajaDepartamento
     */
    public function __construct($codDepartamento, $descDepartamento, $volumenNegocio, $fechaCreacionDepartamento, $fechaBajaDepartamento) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->volumenNegocio = $volumenNegocio;
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
        $this->fechaBajaDepartameno = $fechaBajaDepartamento;
    }
    /**
     * 
     * Metodo getCodDepartamento()
     * 
     * @return string
     * 
     */
    function getCodDepartamento() {
        return $this->codDepartamento;
    }
    /**
     * Metodo getDescDepartamento()
     * 
     * @return type
     * 
     */
    function getDescDepartamento() {
        return $this->descDepartamento;
    }
    /**
     * Metodo getVolumenNegocio()
     * 
     * @return int
     * 
     */
    function getVolumenNegocio() {
        return $this->volumenNegocio;
    }
    /**
     * 
     * Metodo getFechaCreacionDepartamento()
     * 
     * @return int
     * 
     */
    function getFechaCreacionDepartamento() {
        return $this->fechaCreacionDepartamento;
    }
    /**
     * 
     * Metodo getfechaBajaDepartamento()
     * 
     * @return int
     */
    function getFechaBajaDepartamento() {
        return $this->fechaBajaDepartameno;
    }
////////////////////////////////////////////////////////////////////////////////
    /**
     * Metodo setCodDepartamento()
     * 
     * Nos permite cambiar el valor de $codDepartamento
     * 
     * @param string $codDepartamento
     */
    function setCodDepartamento($codDepartamento){
        $this->codDepartamento = $codDepartamento;
    }
    /**
     * Metodo setDescDepartamento()
     * 
     * Nos permite cambiar el valor de $descDepartamento
     * 
     * @param string $descDepartamento
     */
    function setDescDepartamento($descDepartamento){
        $this->descDepartamento = $descDepartamento;
    }
    /**
     * Metodo setVolumenNegocio()
     * 
     * Nos permite cambiar el valor de $volumenNegocio
     *  
     * @param int $volumenNegocio
     */
    function setVolumenNegocio($volumenNegocio){
        $this->volumenNegocio = $volumenNegocio;
    }
    /**
     * Metodo setFechaCreacionDepartamento()
     * 
     * Nos permite cambiar el valor de $fechaCreacionDepartamento
     * 
     * @param int $fechaCreacionDepartamento
     */
    function setFechaCreacionDepartamento($fechaCreacionDepartamento){
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
    }
    /**
     * Metodo setFechaBajaDepartamento()
     * 
     * Nos permite cambiar el valor de $fechaBajaDepartameno
     *  
     * @param int $fechaBajaDepartameno
     */
    function setFechaBajaDepartamento($fechaBajaDepartameno){
        $this->fechaBajaDepartameno = $fechaBajaDepartameno;
    }

}
?>