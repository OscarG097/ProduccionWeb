        <?php
        include_once('partes/header.php')
        ?>	

<body>
        <?php
        include_once('partes/menu-superior.php')
        ?>

        <?php
        include_once('partes/menu-superior.php')
        ?>

    <section class="breadcrumb-section set-bg" data-setbg="img/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Productos</h2>
                        <div class="breadcrumb__option">
                            <span>Nuestros Productos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
			<!--cabecera o menus-->
        <?php
            include_once('partes/menu-superior.php');
            
            //COMIENZA LO NUEVO

            require_once('clases/comentarios.php');
            $comentarios = new comentario($con);
            $mensaje = '';

					
		    if(isset($_POST['enviar_comentario'])){
				$mensaje = $comentarios->guardarComentarios($_POST)
				}
				?>
<!-- Productos-->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Productos</h4>
                            <?php
                                    include_once('partes/menu_de_filtrado.php');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-7">
                        <div class="col-md-12 col-sm-7">
                        <div class="row-fluid">
                        <div class="col-md-12">
                            <div class="product__item">
                                <div class="product__item__text">
                            
                                    <?php
                                    foreach($Productos->getProductos($_GET) as $prod){
                                        if($prod['id'] == $_GET['prod']){
                                        break;
                                    }
                                }
                                    ?>
                        <li class="col-md-12">
							<div class="thumbnail">
								<h3 style="color:black;"><?php echo $prod['nombre']?></h3>
						</li>	

                        <li class="col-lg-12 col-sm-6">
							<div >
                               <img src="img/pagina_productos/<?php echo $prod['id']?>.jpg" alt="" width="253" height="253">	
                                    <button type="submit" class="site-btn">Añadir al carrito</button>
							    		<form action="/action_page.php">
  												<label style="color:black;" for="quantity">Cantidad (máx 5)</label>
  												<input style="color:black;" type="number" id="quantity" name="quantity" min="1" max="5">
										</form>
						</li>	

                                    <li class="col-lg-12 col-sm-6">
									<div class="thumbnail">
										
										<h5 style="color:black;"><strong> <?php echo $prod['modelo']?></strong></h5>
										<h7 style="color:black;">Modelo: <?php echo $prod['precio']?></h7>
										<p style="color:black;">Stock: <?php echo $prod['cantidad']?></p>
								
									</li>
                                    <li class="col-lg-12 col-sm-6">
									<div class="thumbnail">
										
										<p style="color:black;"><strong>Deja un Comentario</strong></p>
										</br>
										<form class="form-horizontal" action="" method="post">
											<fieldset>
											<div class="control-group">
												<input style="color:black;" type="text" placeholder="Ingrese su mail" class="input-xlarge formu" name="email">
											</div>
											
											<br>
											<p style="color:black;"><strong>Ingrese su comentario</strong></p>
											<div style="color:black;" class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Por favor, escriba su mensaje">
												<textarea rows="4" placeholder="Comentario" id="textarea" class="input-xlarge" name="comentario "></textarea>
											</div>
											
											<div class="control-group">
											<p style="color:black;"><strong>Deja tu puntaje del producto</strong>
												<select class="form-control" name="rankeo">
													<option style="color:black;" value="1">★</option>
													<option style="color:black;" value="2">★★</option>
													<option style="color:black;" value="3">★★★</option>
													<option style="color:black;" value="4">★★★★</option>
													<option style="color:black;" value="5">★★★★★</option>
												</select></p>
											</div>
											<input type="hidden"  class="input-xlarge" name="producto_id" value="<?php echo $_GET['prod']?>"/>
			

                                            </fieldset>
                                            
                                            <?php if (!empty ($mensaje)){
                                                echo $mensaje;
                                            }?>

                                            <button class="btn-cart welcome-add-cart site-btn margen" type="submit" name="comentar">Comentar</button>
										</form>
									</li>	
									<h4><u>Comentarios del producto<u></h4>
									<br>
									<?php
										if(file_exists('datos/comentarios.json')){
											$comentarioJson = file_get_contents('datos/comentarios.json');
											$comentarioArray = json_decode($comentarioJson,true );
											//krsort($comentarioArray);
											$cantidad = 0;
											foreach($comentarioArray as $comentario){
												if($comentario['producto_id'] == $_GET['prod']){ 
													$cantidad++;
													if($cantidad == 11) break;
													?>
													<h5>
														<?php echo $comentario['email'].'('.$comentario['fecha'].'):'.$comentario['descripcion']; ?>
													</h5>
											<?php }
											}
										}
									?> 

                                                
                                     </div>
                                  </div>      
                                </div>
                                

                            </div>
                        </div>
                        
                        
                       
                    </div>
                    
                </div>
            
    
    </section>


				
	

        <?php
        include_once('partes/footer.php')
        ?>