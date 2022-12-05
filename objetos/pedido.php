<?php

class pedido{
    public $producto;
    public $cantidad;

    public function __construct($producto){
        $this->producto = $producto;
        $this->cantidad = 1;
    }
    
    /**
     * Get the value of producto
     */ 
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set the value of producto
     *
     * @return  self
     */ 
    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    /**
     * Get the value of cantidad
     */ 
    public function getCantidad()
    {
        return $this->cantidad;
    }


    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function clcPrecio(){
        $valor = $this->getProducto()->getPrecioProducto();
        $pTotal = $valor * $this->getCantidad();
        return $pTotal;
    }
}





?>