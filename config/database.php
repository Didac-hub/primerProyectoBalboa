<?php

class dataBase{
    public static function connect($host = 'localhost',$user='root',$pwd='',$db){
        $con = new mysqli($host,$user,$pwd,$db);
        //Chweck connection
        if($con === false){
            die("ERROR: Could not connect. " . $con->connect_error);
        }

        //Print host information
        //echo "Connect Successfully. Host info " . $con->host_info;
        return $con;
        
    }
}



?>