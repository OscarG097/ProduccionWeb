        <?php
        include_once('partes/header.php')
        ?>	

<body>
        <?php
        include_once('partes/menu-superior.php')
        ?>

    <!-- Inicio de apartado PRODUCTOS -->
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
    <!-- Fin de apartado PRODUCTOS-->

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
                                    <h6>$ <?php echo $prod['precio']?></strong></h6>
                                    <h7>Stock: <?php echo $prod['cantidad']?></h7>
                                    <h7>Puntuacion: <?php echo $prod['puntuacion']?></h7>
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