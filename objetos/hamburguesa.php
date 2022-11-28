<?php
include_once 'productos.php';
class hamburguesa extends productos{
    public $nameProduct;


    public function __construct($id,$tipoProducto,$nameProduct,$precioPrdocuto){
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