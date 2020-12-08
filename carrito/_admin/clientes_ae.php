<?php 
require('inc/header.php');
require('inc/glob.php');


?> 

<div class="container-fluid">
      
      <?php $clientesMenu = 'Clientes';
	include('inc/side_bar.php');
	
	
	  /* if(  !in_array('cliente.add',$_SESSION['usuario'])  ){ 
				header('Location: index.php');
			} */
	
    //$perfil = new Perfil($con); 
    $client = new Clientes($con); 
    

	
	$query = 'SELECT * FROM clientes';
    $cliente = $con->query($query);
	
	if(isset($_GET['edit'])){
            $cliente = $client->get($_GET['edit']); 
	} 
	?>
	  
	  
        
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
	  <h1 class="page-header">
                    Nuevo Usuario
          </h1>
  
          <div class="col-md-2"></div>
            <form action="clientes.php" method="post" class="col-md-6 from-horizontal">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo isset($cliente->nombre)?$cliente->nombre:'';?>">
                    </div>
                </div> 
                 <div class="form-group">
                    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="" value="<?php echo isset($cliente->apellido)?$cliente->apellido:'';?>">
                    </div>
                </div> 
                 <div class="form-group">
                    <label for="usuario" class="col-sm-2 control-label">Usuario</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="" value="<?php echo isset($cliente->usuario)?$cliente->usuario:'';?>">
                    </div>
                </div> 
                 <div class="form-group">
                    <label for="calve" class="col-sm-2 control-label">Clave</label>
                     <div class="col-sm-10">
                        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="">
                    </div>
                </div> 
                 <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">e-Mail</label>
                     <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo isset($cliente->email)?$cliente->email:'';?>">
                    </div>
                </div> 
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" name="activo" value="1" <?php echo (isset($cliente->activo)?(($cliente->activo == 1) ?'checked':''):'');?>> Activo
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit" >Guardar</button>
                    </div>
                </div> 
                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?php echo isset($cliente->id)?$cliente->id:'';?>">

            </form>
          </div>
 
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<?php include('inc/footer.php');?>