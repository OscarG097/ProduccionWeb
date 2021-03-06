		<div id="sidebar" class="span3">							
<?php
	require_once('db_con.php');
	$con = new PDO('mysql:host='.$hostname.';dbname='.$database.';port='.$puerto, $username, $password);
	$query = "SELECT * FROM categorias WHERE padre_id = 0";
	$cate = $con->query($query);
?>
		<ul>
			<?php foreach($cate as $cat){?>
			<li>
				<a href="productos.php?pcat=<?php echo $cat['id']?>" >
					<h5><strong><?php echo $cat['nombre']?></strong></h5>
				</a>
			<?php 
			$query = " SELECT * FROM categorias WHERE padre_id = ".$cat['id']; 
			$sub = $con->query($query); ?>
				<ul>
				<?php foreach($sub as $scat){?>
					<li>
					
						<a href="productos.php?cat=<?php echo $scat['id']?>" >
						<h6><?php echo $scat['nombre']?></h6>
						</a>
					</li>
				<?php } ?>
				</ul> 
				<?php } ?>
				<ul>
				<li>
						<a href="productos.php?cat=&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>&order=<?php echo isset($_GET['order'])?$_GET['order']:''?>">
							<h5>Todos</h5>
					</li>
				</ul>

	<!-- Inicio Marcas -->
		<div class="filter__item">
			<div class="well well-small">	
				<h4>Marcas</h4>
				<ul class="nav flex-column">
					<?php
						require_once('clases/marcas.php');
						$Marcas = new Marcas($con);
						foreach($Marcas->getMarcas() as $marca){ 
					?>
			 		<li><a href="productos.php?marca=<?php echo $marca['id']?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>&order=<?php echo isset($_GET['order'])?$_GET['order']:''?>"><h6><?php echo $marca['nombre']?></h6></a></li>
						<?php }?>
					<li><a href="productos.php?marca=&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>&order=<?php echo isset($_GET['order'])?$_GET['order']:''?>"><h6>Todos</h6></a></li>
				</ul>
			</div>
		</div>
	<!-- Fin Marcas -->

	<!-- Ordenamiento -->
	<div class="filter__item">
        <div class="row-fluid">
			<div class="filter__sort">				
				
				<!--
				<li><a href="productos.php?order=AZ&marca=<?php echo (isset($_GET['marca'])?$_GET['marca']:'') ?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>"><span class="icon-chevron-right"></span>A-Z</a></li>
				<li><a href="productos.php?order=ZA&marca=<?php echo (isset($_GET['marca'])?$_GET['marca']:'') ?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>"><span class="icon-chevron-right"></span>Z-A</a></li>
				<li><a href="productos.php?order=&marca=<?php echo (isset($_GET['marca'])?$_GET['marca']:'') ?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>"><span class="icon-chevron-right"></span>Destacados</a></li>
				-->
		

                <span>Ordenado Por</span>
                <select onchange="ordenamiento()" id="order">
                    <option value="AZ">A-Z</option>
                    <option value="ZA">Z-A</option>
					<option value="PUN">Destacados</option>
                </select>
				<script>
					function ordenamiento(a) {
						var a = document.getElementById('order');
						document.location.href = "productos.php?order="+(a.options[a.selectedIndex].value)+"&marca=<?php echo (isset($_GET['marca'])?$_GET['marca']:'') ?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>";
						
					}
				</script>
				
            </div>
		</div>
	</div>

</div>