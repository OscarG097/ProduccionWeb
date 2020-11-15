<?php 
require('inc/header.php');
?> 

<div class="container-fluid">
      
      <?php $productsMenu = 'Productos';
	include('inc/side_bar.php');
        ?>
	  
	  
	  
        
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
		  <h1 class="page-header">
            <?php echo $productsMenu?>
          </h1>
 

          <h2 class="sub-header">Listado <a href="#"><button type="button" class="btn btn-success" title="Agregar">A</button></a></h2>
          <div class="table-responsive">
            <table class="table table-striped">
				
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
				  <th>Modelo</th>
				  <th>Precio</th>
                  <th>Cant. Stock</th> 
				  <th>Acciones</th>
                </tr>
			  </thead>
			  

			 <?php
			  try {
				$con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database='glob', $username, $password);
		} catch (PDOException $e) {
				print "Error!: " . $e->getMessage();
				die();
		}

		foreach($con->query('SELECT * from productos') as $prod){ ?>

			<tbody> 

						<td><?php echo $prod['id']?></td>
						<td><?php echo $prod['nombre']?></td>
						<td><?php echo $prod['modelo']?></td>
						<td><?php echo $prod['precio']?></td>
						<td><?php echo $prod['cantidad']?></td> 
						<td>
						<a href="productos_ae.php?edit=<?php echo $prod['id']?>"><button type="button" class="btn btn-info" title="Modificar">Modificar</button></a>
							  <a href="productos_ae.php?del=<?php echo $prod['id']?>"><button type="button" class="btn btn-danger" title="Borrar">Borrar</button></a>
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