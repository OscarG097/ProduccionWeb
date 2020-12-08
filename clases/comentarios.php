
<?php

class Comentarios{

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
        $sql = "UPDATE comentarios SET ".implode(',',$columns)." WHERE id = ".$id;
        //echo $sql; die();
        $this->con->exec($sql);
      
} 

  public function getList(){
      $query = "SELECT id,mail,comentario,ip,fecha,estado,id_producto
                 FROM comentarios";
      return $this->con->query($query); 
  }
  
  public function get($id){
      $query = "SELECT id,mail,comentario,ip,fecha,estado,id_producto
                 FROM comentarios WHERE id = ".$id;
                 
      $query = $this->con->query($query); 
          
      $comentarios = $query->fetch(PDO::FETCH_OBJ);
          
          $sql = 'SELECT id,mail,comentario,ip,fecha,estado,id_producto
                    FROM comentarios
                    WHERE id = '.$comentarios->id;

          return $comentarios;
  }

public function del($id){


    $sql = 'DELETE FROM comentarios WHERE id= '.$id;
    //echo $sql; die();
          $this->con->exec($sql); 
  }

  public function save($data){
      
          foreach($data as $key => $value){
              
              if(!is_array($value)){
                  if($value != null){
                      $columns[]=$key;
                      $datos[]=$value;
                  }
              }
          }
         
          $sql = "INSERT INTO comentarios(".implode(',',$columns).") VALUES('".implode("','",$datos)."')";  
          //echo $sql; die();      
          $this->con->exec($sql);

  } 
  
  

}

?>