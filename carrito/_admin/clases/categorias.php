<?php

class Categorias{

    private $con;

    function __construct($con){
        $this->con = $con;
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
        $sql = "UPDATE categorias SET ".implode(',',$columns)." WHERE id = ".$id;
        //echo $sql; die();
        $this->con->exec($sql);
        
       /* $sql = '';
        foreach($data['categorias'] as $permisos){
            $sql .= 'INSERT INTO categorias(id,nombre,padre_id) 
                    VALUES ('.$id.','.$nombre.','.$padre_id.');';
        }
        $this->con->exec($sql);

         
        $sql = 'DELETE FROM categorias WHERE id= '.$id;
        $this->con->exec($sql);
        
        $sql = '';
        foreach($data['categorias'] as $productos){
            $sql .= 'INSERT INTO categorias(id,nombre,padre_id) 
            VALUES ('.$id.','.$nombre.','.$padre_id.');';
        }
        $this->con->exec($sql); */
         
} 

//cosas agregadas


  public function getList(){
      $query = "SELECT id,nombre,padre_id
                 FROM categorias";
      return $this->con->query($query); 
  }
  
  public function get($id){
      $query = "SELECT id,nombre,padre_id
                 FROM categorias WHERE id = ".$id;
                 
      $query = $this->con->query($query); 
          
      $categorias = $query->fetch(PDO::FETCH_OBJ);
          
          $sql = 'SELECT id,nombre,padre_id
                    FROM categorias
                    WHERE id = '.$categorias->id;

          return $categorias;
  }

  public function del($id){

    $sql = 'DELETE FROM categorias WHERE id= '.$id;
    //echo $sql; die();
          $this->con->exec($sql); 

     /* $query = 'SELECT count(1) as cantidad FROM categorias WHERE id = '.$id;
      $consulta = $this->con->query($query)->fetch(PDO::FETCH_OBJ);
      if($consulta->cantidad == 0){
          $query = "DELETE FROM categorias WHERE id = ".$id; 
                   

          $this->con->exec($query); 
          return 1;
      } */
      
  }
  
  /**
  * Guardo los datos en la base de datos
  */
  public function save($data){
      
          foreach($data as $key => $value){
              
              if(!is_array($value)){
                  if($value != null){
                      $columns[]=$key;
                      $datos[]=$value;
                  }
              }
          }
          //var_dump($datos);die();
          $sql = "INSERT INTO categorias(".implode(',',$columns).") VALUES('".implode("','",$datos)."')";
          //echo $sql;die();
          
          $this->con->exec($sql);
          $id = $this->con->lastInsertId();
                         
  } 
  
  

}

?>