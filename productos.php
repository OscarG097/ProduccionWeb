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
         <!--   <div class="col-md-3 col-sm-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Productos</h4>
                                <?php
                               // include_once('partes/menu_de_filtrado.php');
                                ?>
                        </div>
                    </div>
                </div> -->

                <!-- prueba-->

                <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Todas las Categorias</span>
                        </div>
                        <ul>
                            <li><a href="productos.php?cat=9">Botines</a></li>
                            <li><a href="productos.php?cat=8">Zapatillas</a></li>
                            <li><a href="productos.php?cat=3">Camisetas</a></li>
                            <li><a href="productos.php?cat=2">Camperas</a></li>
                            <li><a href="productos.php?pcat=6">Accesorios</a></li>
                            <li><a href="productos.php?cat=">Buzos</a></li>
                            <li><a href="productos.php?cat=">Short</a></li>
                            <li><a href="productos.php?cat">Ver todo</a></li>
 
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Indumentaria</span>
                        </div>
                        <ul>
                            <li><a href="productos.php?cat=3">Camisetas</a></li>
                            <li><a href="productos.php?cat=2">Camperas</a></li>
                            <li><a href="productos.php?pcat=6">Accesorios</a></li>
                            <li><a href="productos.php?cat=">Buzos</a></li>
                            <li><a href="productos.php?cat=">Short</a></li>
                            <li><a href="productos.php?pcat=10">Solo Indumentaria</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Calzado</span>
                        </div>
                        <ul>
                            <li><a href="productos.php?cat=9">Botines</a></li>
                            <li><a href="productos.php?cat=8">Zapatillas</a></li>
                            <li><a href="productos.php?pcat=1">Solo Calzado</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Marcas</span>
                        </div>
                        <ul>
                            <li><a href="productos.php?marca=1">Adidas</a></li>
                            <li><a href="productos.php?marca=2">Nike</a></li>
                            <li><a href="productos.php?marca=3">Reebok</a></li>
                            <li><a href="productos.php?marca=4">Topper</a></li>
                            <li><a href="productos.php?marca=5">Everlast</a></li>
                            <li><a href="productos.php?marca=">Ver Todas</a></li>
                        </ul>
                    </div>
                </div>
           

                 <!-- prueba-->
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
        </div>  
    </section>
    <!-- Product Section End -->
    <?php
        include_once('partes/footer.php')
        ?>
    