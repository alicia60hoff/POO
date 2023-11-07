<?php
require('libro.php');

class Comic extends Libro {
    public string $autor;
    public string $titulo;
    public string $precio;
    public string $stock;
    public string $id;
    public function __construct(){        
    
    parent::__construct($this->autor,$this->titulo,$this->precio,$this->stock,$this->id);

    }
}