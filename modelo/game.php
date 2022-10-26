<?php

include 'producto.php';

class Game extends Producto{
    private $plataforma;

    public function __construct($id, $name, $plataforma){

        parent::__construct($id,$name);
        $this -> plataforma = $plataforma;
    }


    /**
     * Get the value of plataforma
     */ 
    public function getPlataforma()
    {
        return $this->plataforma;
    }

    /**
     * Set the value of plataforma
     *
     * @return  self
     */ 
    public function setPlataforma($plataforma)
    {
        $this->plataforma = $plataforma;

        return $this;
    }

    public function calculaPrecio($numDias){
        $precioTotal = $numDias*self::PRECIOGAME;
        return $precioTotal;  
    }

    public function devuelvePrecioDia(){
        if($this->plataforma == 'PS5'){
            return self::PRECIOGAME + 1;

        }else{
            return self::PRECIOGAME;
        }
    }
}






?>