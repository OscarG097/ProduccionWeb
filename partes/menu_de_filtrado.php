<div id="sidebar" class="span3">

	<!-- categorias -->
    <div class="well well-small">
		<h4>Categorías</h4>
		<ul class="nav flex-column">
			<?php
				require_once('clases/categorias.php');
				$Cat = new Categorias($con);

				foreach($Cat->getCategorias() as $cat){ 
			?>
				<li>
					<a href="productos.php?cat=<?php echo $cat['id']?>&marca=<?php echo (isset($_GET['marca'])?$_GET['marca']:'') ?>&order=<?php echo isset($_GET['order'])?$_GET['order']:''?>">
						<span class="icon-chevron-right"></span><?php echo $cat['nombre']?>
					</a>
				</li>
			<?php }?>
			<li>
					<a href="productos.php?cat=&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>&order=<?php echo isset($_GET['order'])?$_GET['order']:''?>">
						<span class="icon-chevron-right"></span>Todos
					</a>
				</li>
		</ul>
    </div>

	<!-- Marcas -->
	<div class="filter__item">
		<div class="well well-small">	
		<h4>Marcas</h4>
		<ul class="nav flex-column">
			<?php
				require_once('clases/marcas.php');
				$Marcas = new Marcas($con);
				foreach($Marcas->getMarcas() as $marca){ 
			?>
					<li><a href="productos.php?marca=<?php echo $marca['id']?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>&order=<?php echo isset($_GET['order'])?$_GET['order']:''?>"><span class="icon-chevron-right"></span><?php echo $marca['nombre']?></a></li>
			<?php }?>
			<li><a href="productos.php?marca=&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>&order=<?php echo isset($_GET['order'])?$_GET['order']:''?>"><span class="icon-chevron-right"></span>Todos</a></li>

		</ul>
		</div>
	</div>

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
					<option value="DES">Destacados</option>
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