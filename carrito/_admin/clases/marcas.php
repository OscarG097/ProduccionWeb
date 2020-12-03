<?php

class Marcas{

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
        $sql = "UPDATE marcas SET ".implode(',',$columns)." WHERE id = ".$id;
        //echo $sql; die();
        $this->con->exec($sql);
        
        /*$sql = '';
        foreach($data['marcas'] as $permisos){
            $sql .= 'INSERT INTO marcas(id,nombre) 
                    VALUES ('.$id.','.$nombre.');';
        }
        $this->con->exec($sql);

         
        $sql = 'DELETE FROM productos WHERE id= '.$id;
        $this->con->exec($sql);
        
        $sql = '';
        foreach($data['productos'] as $productos){
            $sql .= 'INSERT INTO marcas(id,nombre) 
                 VALUES ('.$id.','.$nombre.');';
        }
        $this->con->exec($sql);*/
         
} 

//cosas agregadas


  public function getList(){
      $query = "SELECT id,nombre
                 FROM marcas";
      return $this->con->query($query); 
  }
  
  public function get($id){
      $query = "SELECT id,nombre
                 FROM marcas WHERE id = ".$id;
                 
      $query = $this->con->query($query); 
          
      $marcas = $query->fetch(PDO::FETCH_OBJ);
          
          $sql = 'SELECT id,nombre
                    FROM marcas
                    WHERE id = '.$marcas->id;

          return $marcas;
  }

  public function del($id){

    $sql = 'DELETE FROM marcas WHERE id= '.$id;
   // echo $sql; die();
          $this->con->exec($sql); 

     /* $query = 'SELECT count(1) as cantidad FROM marcas WHERE id = '.$id;
      $consulta = $this->con->query($query)->fetch(PDO::FETCH_OBJ);
      if($consulta->cantidad == 0){
          $query = "DELETE FROM marcas WHERE id = ".$id; 
                    

          $this->con->exec($query); 
          return 1;
      }
      */
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
          $sql = "INSERT INTO marcas(".implode(',',$columns).") VALUES('".implode("','",$datos)."')";
          //echo $sql;die();
          
          $this->con->exec($sql);
                         
  } 
  
  

}

?>