<?php

class Marcas{
    
     private $con;

     function __construct($con){
         $this->con = $con;
     }

     function getMarcas(){
         return $this->con->query("SELECT * FROM marcas");
     }
}

?>