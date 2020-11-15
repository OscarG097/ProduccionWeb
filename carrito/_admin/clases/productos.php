<?php

class Productos{

    private $con;

    function __construct($con){
        $this->con = $con;
    }

    public function getProductos($filtro = array()){
 
        $query = "SELECT * FROM productos ";
        
        $where = array();

        if (!empty($filtro['cat']) ){
            $where[] = ' categoria_id = '.$filtro['cat']; 
        }

        if(!empty($filtro['marca'])){
            $where[] = ' marca_id = '.$filtro['marca']; 
        }

        if(!empty($where)){
            $query .= ' WHERE '.implode(' AND ',$where);
        }

        return $this->con->query($query);
    }

    public function getProductosHomeRandom(){
        return $this->con->query("SELECT * FROM productos ORDER BY rand() LIMIT 6");
    }
}

?>