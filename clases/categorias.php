<?php
    class Categorias{

        private $con;

        function __construct($con){
            $this->con = $con;
        }

        public function getCategorias(){
            $query = "SELECT * FROM categorias";
            return $this->con->query($query);
        }
    }
?>