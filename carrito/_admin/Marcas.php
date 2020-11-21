<?php 
require('inc/header.php');
?> 

<div class="container-fluid">
      
      <?php $marcasMenu = 'marcas';
	  
	//$productos = new Productos($con);
	include('inc/side_bar.php');
	 
	 
	if(isset($_POST['formulario_marcas'])){ 
	    if($_POST['id'] > 0){
                $marcas->edit($_POST); 
               
	    }else{
			
                $marcas->save($_POST); 
        }
		
		header('Location: Marcas.php');
	}	
	 
	if(isset($_GET['del'])){
			$resp = $perfiles->del($_GET['del']) 	;
            if($resp == 1){
				header('Location: Marcas.php');	
			}
			echo '<script>alert("'.$resp.'");</script>';

	}
	

        ?>
	  
        
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
		  <h1 class="page-header">
            <?php echo $marcasMenu?>
          </h1>
 

          <h2 class="sub-header">Listado <a href="#"><button type="button" class="btn btn-success" title="Agregar">A</button></a></h2>
          <div class="table-responsive">
            <table class="table table-striped">
				
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                </tr>
			  </thead>
			  

			 <?php
			  try {
				$con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database='glob', $username, $password);
		} catch (PDOException $e) {
				print "Error!: " . $e->getMessage();
				die();
		}

		foreach($con->query('SELECT * from marcas') as $mar){ ?>

			<tbody> 

						<td><?php echo $mar['id']?></td>
						<td><?php echo $mar['nombre']?></td>
						<td>
						<a href="Marcas_ae.php?edit=<?php echo $prod['id']?>"><button type="button" class="btn btn-info" title="Modificar">Modificar</button></a>
							  <a href="Marcas_ae.php?del=<?php echo $prod['id']?>"><button type="button" class="btn btn-danger" title="Borrar">Borrar</button></a>
						</td>
					  </tr>         
			</tbody>
					  </tr>      
			</tbody>
			<?php } ?>
		  </table>
		</div>
</div>
</div>  
</section>

<?php include('inc/footer.php');?>