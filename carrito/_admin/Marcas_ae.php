<?php 
require('inc/header.php');
 
?> 

<div class="container-fluid">

<?php
			  try {
				$con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database='glob', $username, $password);
		} catch (PDOException $e) {
				print "Error!: " . $e->getMessage();
				die();
		}
      
      $marcasMenu = 'marcas';
	include('inc/side_bar.php');
	//include('clases/productos.php');
	
	//$productos = new Perfil($con); 
	
	$query = 'SELECT * FROM marcas';
    $marcas = $con->query($query);
  
	
	if(isset($_GET['pito'])){
		$marcas = $mar->get($_GET['pito']); 
		 //var_dump($perfiles);
 } 
	?>
	   
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
	  <h1 class="page-header">
                   Modificacion de Marcas
          </h1>
  
          <div class="col-md-2"></div>
            <form action="productos.php" method="post" class="col-md-6 from-horizontal">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo (isset($marcas->nombre)?$productos->nombre:'');?>">
                    </div>
					</div> 
                 
                 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="formulario_productos" >Guardar</button>
                    </div>
                </div> 
                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?php echo (isset($marcas->id)?$marcas->id:'');?>">

            </form>
          </div> 
 
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<?php include('inc/footer.php');?>