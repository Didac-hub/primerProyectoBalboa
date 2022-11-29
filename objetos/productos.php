<?php
abstract class productos{
    public $id;
    public $tipoProducto;
    public $precioProducto;

    public function __construct($tipoProducto,$precioProducto,$id){
        $this->$tipoProducto = $tipoProducto;
        $this->$precioProducto = $precioProducto;
        $this->$id = $id;
}


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    public function getTipoProducto()
    {
        return $this->tipoProducto;
    }

    public function setTipoProducto($tipoProducto)
    {
        $this->tipoProducto = $tipoProducto;
        return $this;
    }
    
    public function getPrecioProducto()
    {
        return $this->precioProducto;
    }

    public function setPrecioProducto($precioProducto)
    {
        $this->precioProducto = $precioProducto;
        return $this;
    }
}


?>