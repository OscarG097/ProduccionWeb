<?php 
require('inc/header.php');
<<<<<<< HEAD

=======
 
>>>>>>> 24d9a9572d4eac8a426af2e427e08b2a4dbfdc68
?> 

<div class="container-fluid">

<?php
			  try {
				$con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database='glob', $username, $password);
		} catch (PDOException $e) {
				print "Error!: " . $e->getMessage();
				die();
		}
      
      $productosmenu = 'productos';
<<<<<<< HEAD
  include('inc/side_bar.php');
  include('clases/productos.php');
=======
	include('inc/side_bar.php');
>>>>>>> 24d9a9572d4eac8a426af2e427e08b2a4dbfdc68
	
	//$productos = new Perfil($con); 
	
	$query = 'SELECT * FROM productos';
    $productos = $con->query($query);
  
	
<<<<<<< HEAD
      ?>
=======
	if(isset($_GET['edit'])){
            $productos = $producto->get($_GET['edit']); 
           
	} 
	?>
>>>>>>> 24d9a9572d4eac8a426af2e427e08b2a4dbfdc68
	   
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
	  <h1 class="page-header">
                   Modificacion de Productos
          </h1>
  
          <div class="col-md-2"></div>
            <form action="productos.php" method="post" class="col-md-6 from-horizontal">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo (isset($productos->nombre)?$productos->nombre:'');?>">
                    </div>
                </div> 
                 
                 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="formulario_perfiles" >Guardar</button>
                    </div>
                </div> 
<<<<<<< HEAD
                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?php echo (isset($productos->id)?$productos->id:'');?>">
=======
                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?php echo (isset($perfiles->id)?$perfiles->id:'');?>">
>>>>>>> 24d9a9572d4eac8a426af2e427e08b2a4dbfdc68

            </form>
          </div>
 
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<?php include('inc/footer.php');?>