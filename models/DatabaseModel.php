<?php

class DatabaseModel
{
    var $host="localhost";
	var $user="root";
	var $pass="";
    var $db="ctc";
    
    public function connect()
    {
        $con=mysqli_connect($this->host,$this->user,$this->pass,$this->db); 
        return $con;
    }
}