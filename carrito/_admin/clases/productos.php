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


    public function edit($data){
        $id = $data['id'];
        unset($data['id']);
        
        foreach($data as $key => $value){
            if(!is_array($value)){
                if($value != null){	
                    $columns[]=$key." = '".$value."'"; 
                }
            }
        }
        $sql = "UPDATE productos SET ".implode(',',$columns)." WHERE id = ".$id;
        //echo $sql; die();
        $this->con->exec($sql);
        
         
         
        $sql = 'DELETE FROM productos WHERE id= '.$id;
        $this->con->exec($sql);
        
        $sql = '';
        foreach($data['productos'] as $productos){
            $sql .= 'INSERT INTO productos(id,marca_id,categoria_id,modelo,nombre,precio,cantidad,destacado,puntacion) 
                        VALUES ('.$id.','.$marca_id.','$categoria_id','$modelo','$nombre','$precio','$cantidad','$destacado','$puntacion');';
        }
        $this->con->exec($sql);
         
} 
}

?>