        <!--Págima en desarrollo-->

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
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contactanos</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Inicio</a>
                            <span>Contactanos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Teléfono</h4>
                        <p>+54 1165652563</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Dirección</h4>
                        <p>Tomas M. Anchorena 454 CABA</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Horarios de atención</h4>
                        <p>09:00 am a 21:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>glob.info@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Empieza Mapa -->
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1952.6659502744992!2d-58.41086868850988!3d-34.60467747026064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1597466608645!5m2!1ses!2sar" 
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>CABA</h4>
                <ul>
                    <li>Teléfono: +54 1165652563</li>
                    <li>Tomas M. Anchorena 454 CABA</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Termina Mapa -->

    <!-- Formulario de contacto -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Dejanos tu consulta</h2>
                    </div>
                </div>
            </div>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="nombre_apellido" placeholder="Nombre y Apellido">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="email" placeholder="Tu email">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="telefono" placeholder="Tu teléfono">
                    </div>
                        <div class="col-lg-6 col-md-4">
                        <select name="area">
                            <option selected value="0"> Area de consulta</option>
                            <option value="1">Venta Minorista</option> 
                            <option value="2">Venta Mayorista</option> 
                            <option value="3">Depto Envíos</option>
                            <option value="4">Recursos Humanos</option> 
                        </select>
                        </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="comentario" placeholder="Tu Mensaje"></textarea>
                        <button type="submit" class="site-btn" name="enviar">Enviar Mensaje</button>
                        <div class="sidebar__item sidebar__item__color--option">
                    </div>
                </div>
            </form>
            <?php
            include("enviarmail.php");
            ?>
        </div>
    </div>
    <!-- Formulario de contacto fin -->
    
    <!-- Footer-->
        <?php
        include_once('partes/footer.php')
        ?>