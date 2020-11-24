<?php 
require('inc/header.php');
?> 

<div class="container-fluid">
      
      <?php $CategoriaMenu = 'Categorias';
	  
	//$productos = new Productos($con);
	include('inc/side_bar.php');
	 
	 
	if(isset($_POST['formulario_categoria'])){ 
	    if($_POST['id'] > 0){
                $categoria->edit($_POST); 
               
	    }else{
			
                $categoria->save($_POST); 
        }
		
		header('Location: Categorias.php');
	}	
	 
	if(isset($_GET['del'])){
			$resp = $perfiles->del($_GET['del']) 	;
            if($resp == 1){
				header('Location: Categorias.php');	
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
            <?php echo $CategoriaMenu?>
          </h1>
 

          <h2 class="sub-header">Listado <a href="Categorias_ae.php"><button type="button" class="btn btn-success" title="Agregar">A</button></a></h2>
          <div class="table-responsive">
            <table class="table table-striped">
				
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
				  <th>Padre_id</th>
                </tr>
			  </thead>
			  

			 <?php
			  try {
				$con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database='glob', $username, $password);
		} catch (PDOException $e) {
				print "Error!: " . $e->getMessage();
				die();
		}

		foreach($con->query('SELECT * from categorias') as $cat){ ?>

			<tbody> 

						<td><?php echo $cat['id']?></td>
						<td><?php echo $cat['nombre']?></td>
						<td><?php echo $cat['padre_id']?></td>
						<td>
						<a href="Categorias_ae.php?edit=<?php echo $cat['id']?>"><button type="button" class="btn btn-info" title="Modificar">Modificar</button></a>
							  <a href="Categorias.php?del=<?php echo $cat['id']?>"><button type="button" class="btn btn-danger" title="Borrar">Borrar</button></a>
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