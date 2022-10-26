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

public function getTipoProducto(){
    return $this->pan;
}

public function setTipoProducto($pan){
    $this->pan = $pan;
}

public function getPrecioProducto(){
    return $this->pan;
}

public function setPrecioProducto($pan){
    $this->pan = $pan;
}

public function getId(){
    return $this->id;
}

public function setId($id){
    $this->$id = $id;
}

}


?>