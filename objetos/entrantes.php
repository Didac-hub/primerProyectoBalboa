<?php

include_once 'productos.php';
class entrantes extends productos{
    public $nameProduct;

    public function __construct($tipoProducto,$precioPrdocuto,$id,$nameProduct){
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