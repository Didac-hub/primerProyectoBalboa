<?php


class calculaSou{
    static function calculaSumaSous($llistaTreballadors){
        $sumaSou = 0;
        foreach ($llistaTreballadors as $treballador1) {
            $sumaSou += $treballador1 -> getSBase();
        }
        return $sumaSou;
    }
}


?>