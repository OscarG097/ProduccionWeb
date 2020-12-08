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
        
       /* $sql = '';
        foreach($data['productos'] as $permisos){
            $sql .= 'INSERT INTO productos(id,marca_id,categoria_id,modelo,nombre,precio,cantidad,destacado,puntacion,sub_categoria,descripcion,informacion) 
                    VALUES ('.$id.','.$marca_id.','.$categoria_id.','.$modelo.','.$nombre.','.$precio.','.$cantidad.','.$destacado.','.$puntacion.','.$sub_categoria.','.$descripcion.','.$informacion.');';
        }
        $this->con->exec($sql);

         
        $sql = 'DELETE FROM productos WHERE id= '.$id;
        $this->con->exec($sql);
        
        $sql = '';
        foreach($data['productos'] as $productos){
            $sql .= 'INSERT INTO productos(id,marca_id,categoria_id,modelo,nombre,precio,cantidad,destacado,puntacion,sub_categoria,descripcion,informacion) 
            VALUES ('.$id.','.$marca_id.','.$categoria_id.','.$modelo.','.$nombre.','.$precio.','.$cantidad.','.$destacado.','.$puntacion.','.$sub_categoria.','.$descripcion.','.$informacion.');';
        }
        $this->con->exec($sql);*/       
} 

//cosas agregadas


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


      /*$query = 'SELECT count(1) as cantidad FROM productos WHERE id = '.$id;
      $consulta = $this->con->query($query)->fetch(PDO::FETCH_OBJ);
      if($consulta->cantidad == 0){
          $sql = 'DELETE FROM productos WHERE id= '.$id;

          $this->con->exec($sql); 
          return 1;
      }
      return 'No se pudo borrar'; */

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
         
          $sql = "INSERT INTO comentarios(".implode(',',$columns).") VALUES('".implode("','",$datos)."')";  
          //echo $sql; die();      
          $this->con->exec($sql);


         /* $id = $this->con->lastInsertId();

          $sql = '';
			foreach($data['productos'] as $productos){
				$sql .= 'INSERT INTO perfil_permisos(perfil_id,permiso_id) 
                            VALUES ('.$id.','.$permisos.');';
                            
                        }
                        
            
                         $this->con->exec($sql);
                       */ 
  } 
  
  

}

?>