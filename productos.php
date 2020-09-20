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

    <!-- Product Section Begin -->
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
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
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
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Marcas</h4>
                                <input type="checkbox" name="marca" value="1" autocomplete="off"> Adidas
                                <br>
                                <input type="checkbox" name="marca" value="2" autocomplete="off"> Nike
                                <br>
                                <input type="checkbox" name="marca" value="3" autocomplete="off"> Reebok
                                <br>
                                <input type="checkbox" name="marca" value="4" autocomplete="off"> Topper
                                <br>
                                <input type="checkbox" name="marca" value="5" autocomplete="off"> Everlast
                            <div>
                                <button type="submit" class="site-btn">Aplicar</button>
                            </div>
                        </div>
                        <div class="sidebar__item">
                             <h4>Deportes</h4>
                                <input type="checkbox" name="deporte" value="F" autocomplete="off"> Futbol
                                <br>
                                <input type="checkbox" name="deporte" value="J" autocomplete="off"> Jockey
                                <br>
                                <input type="checkbox" name="deporte" value="T" autocomplete="off"> Tenis
                                <br>
                                <input type="checkbox" name="deporte" value="B" autocomplete="off"> Boxeo
                            <div>
                                <button type="submit" class="site-btn">Aplicar</button>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-9 col-sm-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="filter__sort">
                                    <span>Nombre</span>
                                    <select>
                                        <option value="0">A-Z</option>
                                        <option value="0">Z-A</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="filter__found">
                                    <h6><span><!--TOMAR CANTIDAD DE PRODUCTOS--></span> Productos Encontrados</h6>
                                </div>
                            </div>                      
                            <div class="col-md-4 col-sm-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                    </div>

                  
                        <div class="col-md-12 col-sm-7">
                        <div class="row-fluid">
                        <div class="col-md-4 col-sm-5">


                            <div class="product__item">
                                <div class="product__item__text">
                             
                                
                                    <?php
                                    foreach($Productos->getProductos($_GET) as $prod){
                                    ?>
                                              		
                                                <img src="img/pagina_productos/<?php echo $prod['id']?>.jpg" alt="">
                                            
                                                <h4><?php echo $prod['nombre']?></h4>
                                                <h5><?php echo $prod['modelo']?></h5>
                                                <h7>$ <?php echo $prod['precio']?></strong></h7>
										        <p>Stock: <?php echo $prod['cantidad']?></p>
                                                <?php } ?>

                                     </div>
                                  </div>      
                                </div>
                                

                            </div>
                        </div>
                        
                        
                       
                    </div>
                    
                </div>
            
    
    </section>
    <!-- Product Section End -->

        <?php
        include_once('partes/footer.php')
        ?>