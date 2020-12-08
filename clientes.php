<?php 
require('partes/header.php');


?> 

<div class="container-fluid">
      
	  <?php $clientesMenu = 'Clientes';
	  $cliente = new Clientes($con);
	  
	  
	  if(  !in_array('cliente',$_SESSION['usuario']['seccion'])){ 
				header('Location: index.php');
			}
			
			
	//include('inc/side_bar.php');
	 
	if(isset($_POST['submit'])){ 
	    if($_POST['id'] > 0){
                $cliente->edit($_POST); 
               
	    }else{
                $cliente->save($_POST); 
        }
		
		header('Location: login.php');
	}	
	
	

        ?>
	  
	  
        
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
		  <h1 class="page-header">
            Usuarios
          </h1>
 

          <h2 class="sub-header">Listado<a href="clientes_ae.php"><button type="button" class="btn btn-success" title="Agregar">+</button></a></h2>
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

