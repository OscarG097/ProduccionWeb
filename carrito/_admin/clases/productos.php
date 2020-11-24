<?php

class Productos{

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
        $sql = "UPDATE productos SET ".implode(',',$columns)." WHERE id = ".$id;
        //echo $sql; die();
        $this->con->exec($sql);
        
        $sql = '';
        foreach($data['productos'] as $permisos){
            $sql .= 'INSERT INTO productos(id,marca_id,categoria_id,modelo,nombre,precio,cantidad,destacado,puntacion,sub_categoria,descripcion) 
                    VALUES ('.$id.','.$marca_id.','.$categoria_id.','.$modelo.','.$nombre.','.$precio.','.$cantidad.','.$destacado.','.$puntacion.','.$sub_categoria.','.$descripcion.');';
        }
        $this->con->exec($sql);

         
        $sql = 'DELETE FROM productos WHERE id= '.$id;
        $this->con->exec($sql);
        
        $sql = '';
        foreach($data['productos'] as $productos){
            $sql .= 'INSERT INTO productos(id,marca_id,categoria_id,modelo,nombre,precio,cantidad,destacado,puntacion,sub_categoria,descripcion) 
                        VALUES ('.$id.','.$marca_id.','.$categoria_id.','.$modelo.','.$nombre.','.$precio.','.$cantidad.','.$destacado.','.$puntacion.','.$sub_categoria.','.$descripcion.');';
        }
        $this->con->exec($sql);
         
} 

//cosas agregadas


  public function getList(){
      $query = "SELECT id,nombre,modelo,precio,cantidad,destacado,puntuacion,sub_categoria,descripcion
                 FROM productos";
      return $this->con->query($query); 
  }
  
  public function get($id){
      $query = "SELECT id,nombre,modelo,precio,cantidad,destacado,puntuacion,sub_categoria,descripcion
                 FROM productos WHERE id = ".$id;
                 
      $query = $this->con->query($query); 
          
      $productos = $query->fetch(PDO::FETCH_OBJ);
          
          $sql = 'SELECT id,nombre,modelo,precio,cantidad,destacado,puntuacion,sub_categoria,descripcion
                    FROM productos
                    WHERE id = '.$productos->id;

             
         
          /*echo '<pre>';
          var_dump($perfil);echo '</pre>'; */
          return $productos;
  }

public function del($id){
      $query = 'SELECT count(1) as cantidad FROM productos WHERE id = '.$id;
      $consulta = $this->con->query($query)->fetch(PDO::FETCH_OBJ);
      if($consulta->cantidad == 0){
          $query = "DELETE FROM productos WHERE id = ".$id;
          $this->con->exec($query); 
          return 1;
      }

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
          $sql = "INSERT INTO productos(".implode(',',$columns).") VALUES('".implode("','",$datos)."')";
          //echo $sql;die();
          
          $this->con->exec($sql);
          $id = $this->con->lastInsertId();
                         
  } 
  
  

}

?>