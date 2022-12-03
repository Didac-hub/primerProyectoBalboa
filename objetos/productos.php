<?php
abstract class productos{
    public $id;
    public $tipoProducto;
    public $precioProducto;
    public $descrProduct;
    public $imagen;


    public function __construct($id,$tipoProducto,$precioProducto,$descrProduct,$imagen){
        $this->tipoProducto = $tipoProducto;
        $this->precioProducto = $precioProducto;
        $this->id = $id;
        $this->descrProduct = $descrProduct;
        $this->imagen = $imagen;
        
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
    }
    


    public function getPrecioProducto()
    {
        return $this->precioProducto;
    }

    public function setPrecioProducto($precioProducto)
    {
        $this->precioProducto = $precioProducto;
    }



    public function getDescrProduct()
    {
        return $this->descrProduct;
    }

    public function setDescrProduct($descrProduct)
    {
        $this->descrProduct = $descrProduct;
    }



    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
}


?>