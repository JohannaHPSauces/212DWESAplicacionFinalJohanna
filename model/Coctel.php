<?php
    /*
    * @author: Johanna Herrero Pozuelo
    * Created on: 11/05/2022
    * Aplicacion final
    */

class Coctel{
    private $foto;
    private $id;
    private $nombre;
    private $categoria;
    private $ingrediente1;
    private $ingrediente2;
    private $ingrediente3;
    private $ingrediente4;
    
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
    
    function getFoto() {
        return $this->foto;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getIngrediente1() {
        return $this->ingrediente1;
    }

    function getIngrediente2() {
        return $this->ingrediente2;
    }

    function getIngrediente3() {
        return $this->ingrediente3;
    }
    function getIngrediente4() {
        return $this->ingrediente4;
    }

    function setFoto($foto){
        $this->foto = $foto;
    }
    function setId($id){
        $this->id = $id;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    function setIngrediente1($ingrediente1){
        $this->ingrediente1 = $ingrediente1;
    }

    function setIngrediente2($ingrediente2){
        $this->ingrediente2 = $ingrediente2;
    }

    function setIngrediente3($ingrediente3){
        $this->ingrediente3 = $ingrediente3;
    }
    function setIngrediente4($ingrediente4){
        $this->ingrediente3 = $ingrediente4;
    }
}
?>
