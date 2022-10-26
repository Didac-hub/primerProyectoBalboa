<?php
include 'producto.php';

class PELI extends Producto{
    private $genero;

    public function __construct($id, $name, $genero){
        parent::__construct($id,$name);
        $this -> genero = $genero;
    }



    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }


    public function calculaPrecio($numDias){
        $precioTotal = $numDias*Producto::PRECIOPELI;  
    }

    public function devuelvePrecioDia(){
        return self::PRECIOPELI;
    }

}



?>