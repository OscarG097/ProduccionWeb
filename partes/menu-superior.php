<!-- Menu superior empieza -->
<?php //include('header.php'); ?>
<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li> <a class="navbar-brand" href="#">Hola <?php echo $_SESSION['usuario']['nombre']?></a></li>
                                <li><a href="?logout">Logout</a></li>
                                <li><i class="fa fa-envelope"></i>glob.info@gmail.com</li>
                                <li>Envío gratis a todo el país para compras superiores a $2500</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/paises/argentina.jpg" alt="">
                                <div>Argentina</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><img src="img/paises/chile.jpg">Chile</a></li>
                                    <li><img src="img/paises/uruguay.jpg">Uruguay</a</li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="login.php"><i class="fa fa-user"></i>Ingresá</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center d-flex justify-content-around">
                    <nav class= "header__menu">
                        <ul>
                            <li class=""><a href="index.php">Inicio</a></li>
                            <li><a href="productos.php">Productos</a></li>
                            
                            <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 d-flex align-items-center d-flex justify-content-around">
                    <div class="header__cart">
                        <ul>
                            
                            <!-- Carrito -->
                            <li><a href="carrito.php"><i class="fa fa-shopping-bag"></i> <span> 0 </span></a></li>
                        </ul>
                        <div class="d-flex justify-content-center header__cart__price">Total: <span>$0.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Menu superior termina-->