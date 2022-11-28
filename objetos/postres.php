<?php

include_once 'productos.php';
class postres extends productos{
    public $nameProduct;

    public function __construct($tipoProducto,$precioPrdocuto,$nameProduct,$id){
        Parent::__construct($tipoProducto,$precioPrdocuto,$id);
        $this->nameProduct = $nameProduct;

    }
 
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;
    }
}





?>