<?php

class ProductoDAO{
    public static function getAllbyType($tipo){
        
        $result = $con = DataBase::connect();
        $productos = $con->query("SELECT * FROM product WHERE tipo=$tipo");
        //$con->close();

        while($row = $result->fetch_array()){
            echo $row['name'];
        }
    }
}