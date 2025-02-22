<?php
class Categoria {
    private $id;
    private $nombre;
    private $descripcion;

    //constructor opcional
    public function __construct($nombre=null, $descripcion=null) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    //getters y setters

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
?>