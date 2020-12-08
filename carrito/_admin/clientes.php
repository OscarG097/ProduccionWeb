<?php 
require('inc/header.php');
require('inc/glob.php');

?> 

<div class="container-fluid">
      
	  <?php $clientesMenu = 'Clientes';
	  	$cliente = new Clientes($con);
	  
	  
	  //if(  !in_array('cliente',$_SESSION['usuario']['seccion'])){ 
		//		header('Location: index.php');
		//	}
			
			
	include('inc/side_bar.php');
	 
	if(isset($_POST['submit'])){ 
	    if($_POST['id'] > 0){
                $cliente->edit($_POST); 
               
	    }else{
                $cliente->save($_POST); 
        }
		
		header('Location: clientes.php');
	}	
	


	if(isset($_GET['del'])){
		$resp = $cliente->del($_GET['del']) 	;
		if($resp == 1){
			header('Location: clientes.php');	
		}
		echo '<script>alert("'.$resp.'");</script>';

}
	/*if(isset($_GET['del']){
            $cliente->del($_GET['del']);
            header('Location: clientes.php');

	}*/
	

        ?>
	  
	  
        
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
		  <h1 class="page-header">
			Usuarios
			<a href="clientes_ae.php">
			  <button type="button" class="btn btn-success" title="Agregar">Agregar usuario</button></a>
          </h1>
		  

          <h2 class="sub-header">Listado de usuarios de pagina</h2>
			  <div class="table-responsive">
				<table class="table table-striped">

				  <thead>
					<tr>
					  <th>#</th>
					  <th>Nombre</th>
					  <th>Apellido</th>
					  <th>Usuario</th>
					  <th>eMail</th>
					  <th>Activo</th>
					  <th>Acciones</th>
					</tr>
				  </thead>
				  <tbody>
					<?php  	 
						foreach($cliente->getList() as $cli){?>
				  
							<tr>
							  <td><?php echo $cli['id'];?></td>
							  <td><?php echo $cli['nombre'];?></td>
							  <td><?php echo $cli['apellido'];?></td>
							  <td><?php echo $cli['usuario'];?></td>
							  <td><?php echo $cli['email'];?></td>
							  <td><?php echo ($cli['activo'])?'si':'no';?></td>
							  <td>
								
										<a href="clientes_ae.php?edit=<?php echo $cli['id']?>"><button type="button" class="btn btn-info" title="Modificar">Modif</button></a>
										<a href="clientes.php?del=<?php echo $cli['id']?>"><button type="button" class="btn btn-danger" title="Borrar">Borrar
										
										</button></a>
							  </td>
							</tr>
						<?php }?>                
				  </tbody>
				</table>
			  </div>

          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<?php include('inc/footer.php');?>