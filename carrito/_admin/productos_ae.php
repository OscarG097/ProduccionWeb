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
        
        $prod = new Productos($con); 
      $productosmenu = 'productos';
	include('inc/side_bar.php');

	
	$query = 'SELECT * FROM productos';
    $productos = $con->query($query);
  
	
	if(isset($_GET['edit'])){
		$productos = $prod->get($_GET['edit']); 
		// var_dump($productos);
 } 
	?>
	   
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
	  <h1 class="page-header">
                   Modificacion o Carga de Productos
          </h1>
  
          <div class="col-md-2"></div>
            <form action="productos.php" method="post" class="col-md-6 from-horizontal">
                <div class="form-group">
          
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo (isset($productos->nombre)?$productos->nombre:'');?>">
                    </div>
                    <label for="modelo" class="col-sm-2 control-label">Modelo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="" value="<?php echo (isset($productos->modelo)?$productos->modelo:'');?>">
                    </div>
                    <label for="precio" class="col-sm-2 control-label">Precio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="" value="<?php echo (isset($productos->precio)?$productos->precio:'');?>">
                    </div>
                    <label for="cantidad" class="col-sm-2 control-label">Cant. Stock</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="" value="<?php echo (isset($productos->cantidad)?$productos->cantidad:'');?>">
                    </div> 
                    <label for="destacado" class="col-sm-2 control-label">Destacado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="destacado" name="destacado" placeholder="" value="<?php echo (isset($productos->destacado)?$productos->destacado:'');?>">
                    </div>
                    <label for="puntuacion" class="col-sm-2 control-label">Puntuacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="puntuacion" name="puntuacion" placeholder="" value="<?php echo (isset($productos->puntuacion)?$productos->puntuacion:'');?>">
                    </div>
                    <label for="sub_categoria" class="col-sm-2 control-label">Sub_categoria</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sub_categoria" name="sub_categoria" placeholder="" value="<?php echo (isset($productos->sub_categoria)?$productos->sub_categoria:'');?>">
                    </div>
                    <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="" value="<?php echo (isset($productos->descripcion)?$productos->descripcion:'');?>">
                    </div>
					</div> 
                 
                 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="formulario_productos" >Guardar</button>
                    </div>
                </div> 
                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?php echo (isset($productos->id)?$productos->id:'');?>">

            </form>
          </div> 
 
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<?php include('inc/footer.php');?>