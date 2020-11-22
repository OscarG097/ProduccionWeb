        <?php
        include_once('partes/header.php')
        ?>	

<body> 
        <?php
        include_once('partes/menu-superior.php')
        ?>

        <?php
        include_once('partes/menu-costado.php')
        ?>

    <!-- Destacados Empieza -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Productos destacados</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
                    foreach($Productos->getProductosHomeRandom($_GET) as $prod){
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix calzado">
                        <div class="featured__item">
                            <div class="featured__item__text">   
                                <a href="productos_detalle.php?prod=<?php echo $prod['id']?>"><img src="img/pagina_productos/<?php echo $prod['id']?>.jpg" alt=""></a>
                                <h4><?php echo $prod['nombre']?></h4>
                                <h5><?php echo $prod['modelo']?></h5>
                                <h7>$ <?php echo $prod['precio']?></strong></h7>
                                <p>Stock: <?php echo $prod['cantidad']?></p>      
                            </div>              
                        </div>                                  
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Destacados Termina -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Empieza ultimos ingresos -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="latest-product__text">
                        <h4>Mayor valoración</h4>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/productos/mini-accesorio-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Pelota Tsubasa League</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/productos/mini-calzado-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Botin Nike Phantom VSN 2 Pro</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/productos/mini-camiseta-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                     <h6>Camiseta Adidas Manchester United '20</h6>
                                     <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <div class="col-lg-6 col-md-6">
                <div class="latest-product__text">
                        <h4><br></h4>
                    <div class="latest-prdouct__slider__item">
                         <a href="#" class="latest-product__item">
                             <div class="latest-product__item__pic">
                                  <img src="img/productos/mini-accesorio-1.jpg" alt="">
                             </div>
                             <div class="latest-product__item__text">
                                  <h6>Pelota Adidas Unifornia '20</h6>
                                <span>$30.00</span>
                             </div>
                         </a>
                         <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/productos/mini-accesorio-2.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Pelota Adidas Argentum '19</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/productos/mini-calzado-1.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Botines Adidas Nemeziz 19+</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>               
    </section>
    <!-- Termina ultimos ingresos -->

    <!-- Footer-->
        <?php
        include_once('partes/footer.php')
        ?>