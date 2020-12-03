<?php 
require('inc/header.php');
require('inc/glob.php');
 
?> 

<div class="container-fluid">

<?php
			 /* try {
				$con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database='glob', $username, $password);
		} catch (PDOException $e) {
				print "Error!: " . $e->getMessage();
				die();
		}*/
      	
	$cate = new Categorias($con); 
      $CategoriaMenu = 'categorias';
	include('inc/side_bar.php');
	
	$query = 'SELECT * FROM categorias';
    $categorias = $con->query($query);
  
	
	if(isset($_GET['edit'])){
		$categorias = $cate->get($_GET['edit']); 
		 //var_dump($perfiles);
 } 
	?>
	   
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
	  <h1 class="page-header">
                   Modificacion o Carga de Categorias
          </h1>
  
          <div class="col-md-2"></div>
            <form action="Categorias.php" method="post" class="col-md-6 from-horizontal">
                <div class="form-group">

                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo (isset($categorias->nombre)?$categorias->nombre:'');?>">
                    </div>
                    <label for="padre_id" class="col-sm-2 control-label">Padre_id</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="padre_id" name="padre_id" placeholder="" value="<?php echo (isset($categorias->padre_id)?$categorias->padre_id:'');?>">
                    </div>
            
					</div> 
                 
                 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="formulario_categoria" >Guardar</button>
                    </div>
                </div> 
                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?php echo (isset($categorias->id)?$categorias->id:'');?>">

            </form>
          </div> 
 
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<?php include('inc/footer.php');?>