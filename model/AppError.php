<?php
     /**
    * @author: Johanna Herrero Pozuelo
    * Created on: 28/04/2022
    * Clase que sirve para poder crear objetos de la clase Error
    */

class AppError{
    /**
    * @var int
    */
    private $codError;
    /**
     * @var string
     */
    private $descError;
    /**
     * @var string
     */
    private $archivoError;
    /**
     * @var int
     */
    private $lineaError;
    /**
     * @var string
     */
    private $paginaSiguiente;
    /**
     * 
     * @param string $codError Codigo del error
     * @param string $descError Descripcion del error
     * @param string $archivoError Archivo del error
     * @param int $lineaError Linea donde sa ha producido el error
     * @param string $paginaSiguiente Pagina siguiente
     */
    public function __construct($codError, $descError, $archivoError, $lineaError, $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }
    /**
     * Metodo getCodError()
     * 
     * Nos permite obtener el codigo del error que se ha producido
     * 
     * @return string
     * 
     */
    function getCodError() {
        return $this->codError;
    }
    /**
     * Metodo getDescError()
     * 
     * Nos permite obtener la descripcion del error que se ha producido
     * 
     * @return string
     * 
     */
    function getDescError() {
        return $this->descError;
    }
    /**
     * Metodo getArchivoError()
     * 
     * Nos permite obtener el archivo donde se ha producido el error
     * 
     * @return string
     * 
     */
    function getArchivoError() {
        return $this->archivoError;
    }
    /**
     * Metodo getLineaError()
     * 
     * Nos permite obtener la linea donde se ha producido el error
     * 
     * @return int
     * 
     */
    function getLineaError() {
        return $this->lineaError;
    }
    /**
     * Metodo getPaginaSiguiente
     * 
     * Nos permite obtener la pagina siguiente
     * 
     * @return string
     * 
     */
    function getPaginaSiguiente() {
        return $this->paginaSiguiente;
    }
}