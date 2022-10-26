<?php

include_once 'productos.php';
class postres extends productos{
    public $nameProduct;
    public $ingredientes = [];

    public function __construct($tipoProducto,$precioPrdocuto,$ingredientes,$id){
        Parent::__construct($tipoProducto,$precioPrdocuto,$id);
        $this->$ingredientes = $ingredientes;

    }


      /**
     * Get the value of nameProduct
     */ 
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * Set the value of nameProduct
     *
     * @return  self
     */ 
    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;

        return $this;
    }
}





?>