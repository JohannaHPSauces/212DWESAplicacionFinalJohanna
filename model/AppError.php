<?php
     /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 28/04/2022
    * Aplicacion final
    */

class AppError{
    private $codError;
    private $descError;
    private $archivoError;
    private $lineaError;
    private $paginaSiguiente;
    
    
////////////////////CONSTRUCTOR//////////////////////
    
    public function __construct($codError, $descError, $archivoError, $lineaError, $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }

/////////////////////////////GET/////////////////////////// 
    
    function getCodError() {
        return $this->codError;
    }

    function getDescError() {
        return $this->descError;
    }

    function getArchivoError() {
        return $this->archivoError;
    }

    function getLineaError() {
        return $this->lineaError;
    }

    function getPaginaSiguiente() {
        return $this->paginaSiguiente;
    }

///////////////////////////SET/////////////////////////////
    
    function setCodError($codError){
        $this->codError = $codError;
    }

    function setDescError($descError){
        $this->descError = $descError;
    }

    function setArchivoError($archivoError){
        $this->archivoError = $archivoError;
    }

    function setLineaError($lineaError){
        $this->lineaError = $lineaError;
    }

    function setPaginaSiguiente($paginaSiguiente){
        $this->paginaSiguiente = $paginaSiguiente;
    }



    
    
    
    
    
    
    
    
    
    
    
}


