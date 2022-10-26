<?php

class pedidos{
    public $numPedido;
    public $productos = [];
    public $idCliente;
    public $metodoPago;
    public $pTotal;

    public function __construct($numPedido,$productos,$idCliente,$metodoPago,$pTotal){
        $this->$numPedido = $numPedido;
        $this->$productos = $productos;
        $this->$idCliente = $idCliente;
        $this->$metodoPago = $metodoPago;
        $this->$pTotal = $pTotal;

    }


    /**
     * Get the value of numPedido
     */ 
    public function getNumPedido()
    {
        return $this->numPedido;
    }

    /**
     * Set the value of numPedido
     *
     * @return  self
     */ 
    public function setNumPedido($numPedido)
    {
        $this->numPedido = $numPedido;

        return $this;
    }

    
    /**
     * Get the value of productos
     */ 
    public function getProductos()
    {
        return $this->productos;
    }

    /**
     * Set the value of productos
     *
     * @return  self
     */ 
    public function setProductos($productos)
    {
        $this->productos = $productos;

        return $this;
    }


    /**
     * Get the value of idCliente
     */ 
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     *
     * @return  self
     */ 
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }


    /**
     * Get the value of metodoPago
     */ 
    public function getMetodoPago()
    {
        return $this->metodoPago;
    }

    /**
     * Set the value of metodoPago
     *
     * @return  self
     */ 
    public function setMetodoPago($metodoPago)
    {
        $this->metodoPago = $metodoPago;

        return $this;
    }


    /**
     * Get the value of pTotal
     */ 
    public function getPTotal()
    {
        return $this->pTotal;
    }

    /**
     * Set the value of pTotal
     *
     * @return  self
     */ 
    public function setPTotal($pTotal)
    {
        $this->pTotal = $pTotal;

        return $this;
    }
}





?>