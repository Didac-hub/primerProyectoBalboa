<?php
include_once 'productos.php';
class Hamburguesa extends productos{
    public $nameProduct;


    public function __construct($id,$tipoProducto,$nameProduct,$precioProducto){
        Parent::__construct($tipoProducto,$precioProducto,$id);
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