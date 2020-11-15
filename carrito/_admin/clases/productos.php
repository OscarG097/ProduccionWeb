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
<<<<<<< HEAD

    //FUNCION EDIT COPIADO DE PERFIL.PHP

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
        $sql = "UPDATE perfil SET ".implode(',',$columns)." WHERE id = ".$id;
        //echo $sql; die();
        $this->con->exec($sql);
        
         
         
            $sql = 'DELETE FROM perfil_permisos WHERE perfil_id= '.$id;
            $this->con->exec($sql);
            
            $sql = '';
            foreach($data['permisos'] as $permisos){
                $sql .= 'INSERT INTO perfil_permisos(perfil_id,permiso_id) 
                            VALUES ('.$id.','.$permisos.');';
            }
            $this->con->exec($sql);
         
        } 
    }
=======
}

>>>>>>> 24d9a9572d4eac8a426af2e427e08b2a4dbfdc68
?>