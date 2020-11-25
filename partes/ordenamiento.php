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