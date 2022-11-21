<?php
require_once('personal.php');

class Treballador extends Personal{

    

    function calculaSouMensualNet(){
        return round($this->sBase * (1 - $this->irpf) / 12,2);
        
    }

    function souMensualActualitzat(){
        if ($this->getSBase() < 17000) {
                $this->setSBase($this->getSbase() * 1.1);
        }
        return $this->calculaSouMensualNet();  
    }

}
?>