<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 24/04/2022
    * Aplicacion final
    */

class Departamento{
    private $codDepartamento;
    private $descDepartamento;
    private $volumenNegocio;
    private $fechaCreacionDepartamento;
    private $fechaBajaDepartameno;
    
    
    public function __construct($codDepartamento, $descDepartamento, $volumenNegocio, $fechaCreacionDepartamento, $fechaBajaDepartameno) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->volumenNegocio = $volumenNegocio;
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
        $this->fechaBajaDepartameno = $fechaBajaDepartameno;
    }
    
    function getCodDepartamento() {
        return $this->codDepartamento;
    }

    function getDescDepartamento() {
        return $this->descDepartamento;
    }

    function getVolumenNegocio() {
        return $this->volumenNegocio;
    }

    function getFechaCreacionDepartamento() {
        return $this->fechaCreacionDepartamento;
    }

    function getFechaBajaDepartameno() {
        return $this->fechaBajaDepartameno;
    }

    function setCodDepartamento($codDepartamento){
        $this->codDepartamento = $codDepartamento;
    }

    function setDescDepartamento($descDepartamento){
        $this->descDepartamento = $descDepartamento;
    }

    function setVolumenNegocio($volumenNegocio){
        $this->volumenNegocio = $volumenNegocio;
    }

    function setFechaCreacionDepartamento($fechaCreacionDepartamento){
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
    }

    function setFechaBajaDepartameno($fechaBajaDepartameno){
        $this->fechaBajaDepartameno = $fechaBajaDepartameno;
    }

}

?>