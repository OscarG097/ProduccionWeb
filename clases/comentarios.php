<?php

class Comentario{

    private $con;

    function __construct($con){
        $this->con = $con;
    }


    function guardarComentarios($datos = array()){

    $sql = "INSERT INTO comentarios(mail, comentario, ip, fecha, estado) 
    VALUES ('".$datos['mail']."', '".$datos['comentario']."', '".$_SERVER['REMOTE_ADDR']."',now(),FALSE,".$datos['producto']."')";

    
if($this->con->exec($sql) > 0){
return 'Comentario almacenado';
}else{
return 'Error, intente nuevamente corroborando los datos';
}

}
}

