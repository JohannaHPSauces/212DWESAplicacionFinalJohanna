<?php
    /**
    * @author: Johanna Herrero Pozuelo
    * Created on: 11/05/2022
    * 
     * Clase que sirve para crear objetos de la clase coctel
    */

class Coctel{
    /**
     * @var string
     * 
     */
    private $foto;
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     * 
     */
    private $nombre;
    /**
     * @var string
     */
    private $categoria;
    /**
     * @var string
     * 
     */
    private $ingrediente1;
    /**
     * @var string
     * 
     */
    private $ingrediente2;
    /**
     * @var string
     * 
     */
    private $ingrediente3;
    /**
     * @var string
     * 
     */
    private $ingrediente4;
    /**
     * 
     * @param string $foto imagen del coctel
     * @param int $id id que identifica al coctel
     * @param string $nombre como se llama el coctel
     * @param string $categoria categoria a la que pertenece
     * @param string $ingrediente1 ingrediente
     * @param string $ingrediente2 ingrediente
     * @param string $ingrediente3 ingrediente
     * @param string $ingrediente4 ingrediente
     * 
     */
    function __construct($foto, $id, $nombre, $categoria, $ingrediente1, $ingrediente2, $ingrediente3, $ingrediente4) {
        $this->foto = $foto;
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->ingrediente1 = $ingrediente1;
        $this->ingrediente2 = $ingrediente2;
        $this->ingrediente3 = $ingrediente3;
        $this->ingrediente4 = $ingrediente4;
    }
    /**
     * Metodo getFoto()
     * 
     * Nos devuelve la imagen del coctel
     * 
     * @return string
     * 
     */
    function getFoto() {
        return $this->foto;
    }
    /**
     * Metodo getId()
     * 
     * Nos devuelve el id del coctel
     * 
     * @return Int
     * 
     */
    function getId() {
        return $this->id;
    }
    /**
     * Metodo getNombre()
     * 
     * Nos devuelve como se llama el coctel
     * 
     * @return string
     * 
     */
    function getNombre() {
        return $this->nombre;
    }
    /**
     * Metodo getCategoria()
     * 
     * Nos devuelve la categoria a la que pertenece el coctel
     * 
     * @return string
     * 
     */
    function getCategoria() {
        return $this->categoria;
    }
    /**
     * Metodo getIngrediente1()
     * 
     * Nos devuelve el nombre del ingrediente1
     * 
     * @return string
     * 
     */
    function getIngrediente1() {
        return $this->ingrediente1;
    }
    /**
     * Metodo getIngrediente2()
     * 
     * Nos devuelve el nombre del ingrediente2
     * 
     * @return string
     * 
     */
    function getIngrediente2() {
        return $this->ingrediente2;
    }
    /**
     * Metodo getIngrediente3()
     * 
     * Nos devuelve el nombre del ingrediente3
     * 
     * @return string
     * 
     */
    function getIngrediente3() {
        return $this->ingrediente3;
    }
    /**
     * Metodo getIngrediente4()
     * 
     * Nos devuelve el nombre del ingrediente4
     * 
     * @return string
     * 
     */
    function getIngrediente4() {
        return $this->ingrediente4;
    }
}
?>