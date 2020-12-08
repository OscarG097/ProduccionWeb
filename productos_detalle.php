<?php
        include_once('partes/header.php')
        ?>

<body>
        <?php
        include_once('partes/menu-superior.php')
        ?>

        <!--prueba-->
     

                    <?php
                        
                    $comen = new Comentarios($con); 
                    $comentariosmenu = 'comentarios';
                
                    $query = 'SELECT * FROM productos INNER JOIN productos_comentario_dinamico INNER JOIN comentario_campo_dinamico';
                    $comentario = $con->query($query);
                    if(isset($_GET['edit'])){
                    $comentario = $comen->get($_GET['edit']); 
                    
                    } 
                    ?>

                    <?php                         
                        if(isset($_POST['formulario_comentarios'])){ 
                            if($_POST['id'] > 0){
                                 $comentario->edit($_POST); 
                                    
                            }else{
                                $comentario->save($_POST); 
                            }
                            
                            header('Location: productos_detalle.php');
                        }	
                            ?>
        <!--prueba-->



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Productos</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <a href="./productos.php">Productos</a>
                            <?php
                            foreach ($Productos->getProductos($_GET) as $prod) {
                                if ($prod['id'] == $_GET['prod']) {
                                    break;
                                }
                            }
                            ?>
                            <span class="etiqueta"><?php echo $prod['nombre'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="img/pagina_productos/<?php echo $prod['id'] ?>.jpg" alt="" width="600" height="600">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/product/details/product-details-1.jpg" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">

                    <div class="product__details__text">
                        <h3><?php echo $prod['nombre'] ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>

                        <div class="product__details__price"><?php echo '$'. $prod['precio'] ?></div>
                        <p><?php echo $prod['descripcion'] ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Añadir al carrito</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Disponibilidad: </b> <span>En stock: <?php echo $prod['cantidad']. ' unidades disponibles' ?></span></li>
                            <li><b>Envío:</b> <span><samp>Envío gratis hoy</samp></span></li>
                            <li><b>Compartir:</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="false">Información</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Comentarios<span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Información de producto</h6>
                                    <p><?php echo $prod['informacion'] ?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Comentarios</h6>
                                    <p>hola</p>





                                    <!--prueba-->



                                    <div class="col-md-2"></div>
            <form action="productos_detalle.php" method="post" class="col-md-6 from-horizontal">
                <div class="form-group">                 


                                    <label for="mail" class="col-sm-2 control-label">mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="mail" name="mail" placeholder="" value="<?php echo (isset($comentario->mail)?$comentario->mail:'');?>">
                    </div>  
                    <label for="comentario" class="col-sm-2 control-label">comentario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="comentario" name="comentario" placeholder="" value="<?php echo (isset($comentario->comentario)?$comentario->comentario:'');?>">
                    </div>   
                 

                    
                    <label for="mail" class="col-sm-2 control-label">mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="mail" name="mail" placeholder="" value="<?php echo (isset($comentario->mail)?$comentario->mail:'');?>">
                    </div>  
                    <label for="comentario" class="col-sm-2 control-label">comentario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="comentario" name="comentario" placeholder="" value="<?php echo (isset($comentario->comentario)?$comentario->comentario:'');?>">
                    </div>   

                 
                 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="formulario_comentarios" >Guardar</button>
                    </div>
                </div> 
                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?php echo (isset($comentario->id)?$comentario->id:'');?>">

            </form>
          </div> 


                                    <!--prueba-->




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Los usuarios tambien vieron:</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
                  foreach($Productos->getProductosProductRandom($_GET) as $prod){
              ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                          <div class="featured__item__text">
                              <a href="productos_detalle.php?prod=<?php echo $prod['id']?>"><img src="img/pagina_productos/<?php echo $prod['id']?>.jpg" alt=""></a>
                              <h4><?php echo $prod['nombre']?></h4>
                              <h5><?php echo $prod['modelo']?></h5>
                              <h7>$ <?php echo $prod['precio']?></strong></h7>
                              <p>Stock: <?php echo $prod['cantidad']?></p>
                          </div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><?php echo $prod['modelo']?></h6>
                            <h5>$ <?php echo $prod['precio']?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

         <?php
        include_once('partes/footer.php')
        ?>
