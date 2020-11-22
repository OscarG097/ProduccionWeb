<?php

class Productos{

    private $con;

    function __construct($con){
        $this->con = $con;
    }

    public function getProductos($filtro = array()){
 
        $query = "SELECT * FROM productos " ;
        
        $where = array();

        if (!empty($filtro['cat']) ){
            if(is_numeric($filtro['cat'])) {
                $where[] = ' categoria_id = '.$filtro['cat']; 
            }
        }
        
        if (!empty($filtro['pcat']) ){
            if(is_numeric($filtro['pcat'])) {
                $where[] = ' sub_categoria = '.$filtro['pcat']; 
            }
        }

        if(!empty($filtro['marca'])){
            if(is_numeric($filtro['marca'])) {
                $where[] = ' marca_id = '.$filtro['marca']; 
            }
        }

        if(!empty($where)){
            $query .= ' WHERE '.implode(' AND ',$where);
        }

        //echo $query; die();

        // ORDER
        if (!empty($filtro['order'])) {

            if ($filtro['order'] == 'AZ') {
                $query .= ' ORDER BY nombre ASC';
            }elseif ($filtro['order'] == 'ZA') {
                $query .= ' ORDER BY nombre DESC';
            }elseif ($filtro['order'] == 'PUN') {
                $query .= ' ORDER BY puntuacion DESC';
            }
            else{
                $query .= ' ORDER BY destacado ASC';
            }   
        }
        else{
            $query .= ' ORDER BY destacado ASC';
        }


        return $this->con->query($query);
    }

    public function getProductosHomeRandom(){
        return $this->con->query("SELECT * FROM productos ORDER BY rand() LIMIT 12");
    }
}

?>