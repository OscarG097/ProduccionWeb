<?php
        include_once('partes/header.php')
        ?>	

<body>
        <?php
        include_once('partes/menu-superior.php')
        ?>

    <!-- Breadcrumb Section Begin -->
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
    <!-- Breadcrumb Section End -->

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
                        <div class="sidebar__item">
                            <h4>Rango Precio</h4>
                            <div class="price-range-wrap">

                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="100" data-max="5000">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header">
                                    </div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    </div>

                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    foreach($Productos->getProductos($_GET) as $prod){
                ?>
                    <div class="col-md-3 col-sm-3">
                            <div class="row">
                                    <div class="product__item">

                                    <div class="product__item__pic set-bg">
                                        <a href="productos_detalle.php?prod=<?php echo $prod['id']?>"><img src="img/pagina_productos/<?php echo $prod['id']?>.jpg" alt=""></a>
                                    </div>
                                        <div class="product__item__text"> 
                                            
                                            <h4><?php echo $prod['nombre']?></h4>
                                            <h5><?php echo $prod['modelo']?></h5>
                                            <h7>$ <?php echo $prod['precio']?></strong></h7>
                                            <p>Stock: <?php echo $prod['cantidad']?></p>
                                        
                                        </div>
                                        
                                    </div>      
                            </div>
                    </div>
                <?php } ?>

                    
                
            </div>
            
        </div>

                
    </section>

    
    <!-- Product Section End -->

        <?php
        include_once('partes/footer.php')
        ?>