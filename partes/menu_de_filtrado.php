<div id="sidebar" class="span3">
    <div class="well well-small">
	<!-- categorias -->
	<h4>Categorías</h4>
	<ul class="nav flex-column">
		<?php
			require_once('clases/categorias.php');
			$Cat = new Categorias($con);

			foreach($Cat->getCatorias() as $cat){ 
		?>
			<li>
				<a href="productos.php?cat=<?php echo $cat['id']?>&marca=<?php echo (isset($_GET['marca'])?$_GET['marca']:'') ?>">
					<span class="icon-chevron-right"></span><?php echo $cat['nombre']?>
				</a>
			</li>
		<?php }?>
		<li>
				<a href="productos.php?cat=&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>">
					<span class="icon-chevron-right"></span>Todos
				</a>
			</li>
	</ul>
    </div>
<div class="well well-small">
	<!-- marcas -->
	<h4>Marcas</h4>
	<ul class="nav flex-column">
		<?php
			require_once('clases/marcas.php');
			$Marcas = new Marcas($con);
			foreach($Marcas->getMarcas() as $marca){ 
		?>
				<li><a href="productos.php?marca=<?php echo $marca['id']?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>"><span class="icon-chevron-right"></span><?php echo $marca['nombre']?></a></li>
		<?php }?>
		<li><a href="productos.php?marca=&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>"><span class="icon-chevron-right"></span>Todos</a></li>

	</ul>
</div>
</div>