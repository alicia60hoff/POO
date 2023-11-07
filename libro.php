<?php

class Libro {
    //propiedades de Libro
   public string $autor;
    public string $titulo;
    public float $precio;
    public int $stock;
    public int $id;

    //Metodos Magico __construct
    public function __construct($autor,$titulo,$precio,$stock,$id)
    {
    $this->autor=$autor;
    $this->titulo=$titulo;
    $this->precio=$precio;
    $this->stock=$stock;
    $this->id=$id;
    

    }
    public function getAutor(){
        $escritor =$this->autor;
        return $escritor;
        
    $this->titulo=$titulo;
    }
        
        public function getTitulo(){
            $t = $this->titulo;
            return $t;    
    }
     public function getInfo () {
    $aut= $this->autor;    
   $tit= $this->titulo;
   $preci= $this->precio;
   $stock= $this->stock;
   $ident= $this->id;
   $info="Autor del libro: $this->autor <br>
   Titulo del libro: $this->titulo  <br>
   Precio: $this->precio <br>
   Cantidad de copias: $this->stock <br>
   Su id es : $this->id <br>";
   return $info;

    
     }
    }
        $libro1= new Libro("Stephen King","It", 2500.99,10,1);


       //var_dump($libro1); 
       echo $libro1->getInfo();


    
