<?php

require_once('personal.php');

class Gerents extends Personal{

    private $complement;
    private $carrec;


    public function __construct($nom,$dir,$datInc,$sBase,$irpf,$complement,$carrec)
    {
        Parent::__construct($nom,$dir,$datInc,$sBase,$irpf);
        $this->complement = $complement;
        $this->carrec = $carrec;
    }

    function calculaSouMensualNet(){
        return round(($this->sBase * (1 - $this->irpf) / 12)+ $this->complement,2);
        
    }

    function souMensualActualitzat(){
        $this->setComplement($this->complement/2);
        $this->calculaSouMensualNet();  
    }

    


    /**
     * Get the value of complement
     */ 
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set the value of complement
     *
     * @return  self
     */ 
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get the value of carrec
     */ 
    public function getCarrec()
    {
        return $this->carrec;
    }

    /**
     * Set the value of carrec
     *
     * @return  self
     */ 
    public function setCarrec($carrec)
    {
        $this->carrec = $carrec;

        return $this;
    }
}



?>