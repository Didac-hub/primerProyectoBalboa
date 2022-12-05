<?php

include_once 'productos.php';
class postres extends productos{
    public $nameProduct;

    public function __construct($id,$tipoProducto,$nameProduct,$precioProducto,$descrProduct,$imagen){
        Parent::__construct($id,$tipoProducto,$precioProducto,$descrProduct,$imagen);
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