<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />


    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css" />

    <title>Aromas Sagrados</title>
</head>

<body>

<!-- Header -->
<header id="header" class="header">
    <div class="navigation">
        <div class="container">
            <nav class="nav">
                <div class="nav__hamburger">
                    <svg>
                        <use xlink:href="./images/sprite.svg#icon-menu"></use>
                    </svg>
                </div>

                <div class="nav__logo">
                    <a href="index.blade.php" class="scroll-link">
                        AROMAS SAGRADOS
                    </a>
                </div>

                <div class="nav__menu">
                    <div class="menu__top">
                        <span class="nav__category">Aromas Sagrados</span>
                        <a href="#" class="close__toggle">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-cross"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.blade.php" class="nav__link">INICIO</a>
                        </li>
                        <li class="nav__item">
                            <a href="todos.blade.php" class="nav__link">PRODUCTOS</a>
                        </li>
                        <li class="nav__item">
                            <a href="contact.blade.php" class="nav__link">CONTACTANOS</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Hero -->
    <div class="hero">
        <div class="glide" id="glide_1">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="hero__center">
                            <div class="hero__left">
                                <span class="">SAHUMERIOS DESTACADOS 2022</span>
                                <h1 class="">AROMAS EXOTICOS</h1>
                                <p>Todo sobre los mejores aromas del mercado</p>
                                <a href="tradicional.blade.php"><button class="hero__btn">COMPRAR</button></a>
                            </div>
                            <div class="hero__right">
                                <div class="hero__img-container">
                                    <img class="banner_01" src="./images/banner_01.png" alt="banner2" />
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="hero__center">
                            <div class="hero__left">
                                <span>VELAS DE TODO TIPO </span>
                                <h1>VELAS 100% PARAFINA</h1>
                                <p>Velas 100% parafina de excelente calidad</p>
                                <a href="velon.blade.php"><button class="hero__btn">COMPRAR</button></a>
                            </div>
                            <div class="hero__right">
                                <img class="banner_02" src="./images/banner_02.png" alt="banner2" />
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <svg>
                        <img src="./images/left.png" />
                    </svg>
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <svg>
                        <img src="images/right.png"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Main -->
<main id="main">
    <div class="container">
        <!-- Collection -->
        <section id="collection" class="section collection">
            <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
                <div class="collection__box">
                    <div class="img__container">
                        <img class="collection_02" src="./images/collection_02.png" alt="">
                    </div>
                    <div class="collection__content">
                        <div class="collection__data">
                            <span>Sahumerios Internacionales</span>
                            <h1>SAHUMERIOS</h1>
                            <a href="./product.blade.php">COMPRAR</a>
                        </div>
                    </div>
                </div>
                <div class="collection__box">
                    <div class="img__container">
                        <img class="collection_01" src="./images/collection_01.png" alt="">
                    </div>
                    <div class="collection__content">
                        <div class="collection__data">
                            <span>Nuevas velas </span>
                            <h1>VELAS</h1>
                            <a href="vela.blade.php">COMPRAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Latest Products -->
        <section class="section latest__products" id="latest">
            <div class="title__container">
                <div class="section__title active" data-id="Latest Products">
                    <span class="dot"></span>
                    <h1 class="primary__title">Ultimas novedades</h1>
                </div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-duration="1200">
                <div class="glide" id="glide_2">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides latest-center">
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <img src="https://images.unsplash.com/photo-1639390167093-9c62311fe84d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80" alt="product">
                                    </div>
                                    <div class="product__footer">
                                        <h3>Sahumerios en conos</h3>
                                        <div class="product__price">
                                            <h4>$100</h4>
                                        </div>
                                        <a href="conos.blade.php"><button type="submit" class="product__btn">Comprar </button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg>
                                                    <img src="images/carrito.png" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <img src="https://images.unsplash.com/photo-1627809381019-976c0d1adc98?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="product">
                                    </div>
                                    <div class="product__footer">
                                        <h3>Incienso Sagrado</h3>
                                        <div class="product__price">
                                            <h4>$500</h4>
                                        </div>
                                        <a href="tradicional.blade.php"><button type="submit" class="product__btn">Comprar</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg>
                                                    <img src="images/carrito.png" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <img src="https://images.unsplash.com/photo-1588372405219-e40d64efafcb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80" alt="product">
                                    </div>
                                    <div class="product__footer">
                                        <h3>Vela Aromatica de Soja</h3>
                                        <div class="product__price">
                                            <h4>$600</h4>
                                        </div>
                                        <a href="soja.blade.php"><button type="submit" class="product__btn">Comprar</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg>
                                                    <img src="images/carrito.png" />
                                                </svg>
                                            </a>


                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <img src="https://images.unsplash.com/photo-1608571423539-e951b9b3871e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=380&q=80" alt="product">
                                        <h3>Aceite Esencial</h3>
                                        <div class="product__price">
                                            <h4>$350</h4>
                                        </div>
                                        <a href="aceite.blade.php"><button type="submit" class="product__btn">COMPRAR</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg>
                                                    <img src="images/carrito.png" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="category__section section" id="category">
            <div class="tab__list">
            </div>
            <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
                <div class="category__center"></div>
            </div>
        </section>
    </div>



    <!-- Testimonial Section -->
    <section class="section testimonial" id="testimonial">
        <div class="testimonial__container">
            <div class="glide" id="glide_4">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="testimonial__box">
                                <div class="client__image">
                                    <img src="./images/profile1.jpg" alt="profile">
                                </div>
                                <p>Mi vida ha cambiado desde que uso sahumerios todos los dias para poder dormir o simplemente
                                    para relajarme es increible y se lo recomiendo a todos.</p>
                                <div class="client__info">
                                    <h3>Maria Elena Fuseneco</h3>
                                    <span>Gerente de banco Santander</span>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="testimonial__box">
                                <div class="client__image">
                                    <img src="./images/profile2.jpg" alt="profile">
                                </div>
                                <p>Muchas veces llegaba a casa cansado del trabajo y conmigo se impregnaba el olor un olor repulsivo
                                    debido a mi tipo de trabajo, hoy mi casa es una campo de lavandas francesas.</p>
                                <div class="client__info">
                                    <h3>Pepe Argento</h3>
                                    <span>Comerciante de Zapatos</span>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="testimonial__box">
                                <div class="client__image">
                                    <img src="./images/profile3.jpg" alt="profile">
                                </div>
                                <p>Durante mi instancia en casa tengo muchos deberes que atender como el cuidado de los chicos y la limpieza del hogar
                                    esto resulta estresante pero gracias a las velas aromaticas de soja puedo relajarme y a la vez perfurmar todo el ambiente</p>
                                <div class="client__info">
                                    <h3>Monica Argento</h3>
                                    <span>Amá de casa</span>
                                </div>
                            </div>

                        </li>

                    </ul>
                </div>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                </div>
            </div>
        </div>
    </section>



    <!-- NewsLetter -->
    <section class="section newsletter" id="contact">
        <div class="container">
            <div class="newsletter__content">
                <div class="newsletter__data">
                    <h3>SUBSCRIBETE PARA OBTENER TODAS LAS NOVEDADES</h3>
                    <p>Recibe alertas sobre las ultimas promociones, cupones y ediciones especiales!</p>
                </div>
                <form action="#">
                    <input type="email" placeholder="Introduzca su email" class="newsletter__email">
                    <a class="newsletter__link" href="#">subscribete</a>
                </form>
            </div>
        </div>
    </section>

</main>

<!-- End Main -->

<!-- Footer -->
<footer id="footer" class="section footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer-top__box">
                <h3>INFORMACION</h3>
                <a href="#">Contactenos</a>
                <a href="#">Ubicacion</a>
            </div>
            <div class="footer-top__box">
                <h3>MI CUENTA</h3>
                <a href="#">Mi cuenta</a>
                <a href="#">Historial</a>
            </div>
            <div class="footer-top__box">
                <h3>CONTACTENOS</h3>
                <div>
                    Calle Siempre Viva 2500 , Palermo.
                </div>
                <div>
                    sahumeriossagrados@gmail.com
                </div>
                <div>
                    11-55555555
                </div>
                <div>
                    CABA, Argentina.
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer-bottom__box">

        </div>
        <div class="footer-bottom__box">

        </div>
    </div>
    </div>
</footer>
<!-- End Footer -->

<!-- PopUp -->
<div class="popup hide__popup">
    <div class="popup__content">
        <div class="popup__close">
            <svg>
                <img src="https://img.icons8.com/ios-glyphs/30/null/multiply.png"/>
            </svg>
        </div>
        <div class="popup__left">
            <div class="popup-img__container">
                <img class="popup__img" src="./images/popup.jpg" alt="popup">
            </div>
        </div>
        <div class="popup__right">
            <div class="right__content">
                <h1>Consigue un descuento de  <span>30%</span></h1>
                <p>Subscribete para obtener las ultimas novedades y beneficios!
                </p>
                <form action="#">
                    <input type="email" placeholder="Introduce tu email..." class="popup__form">
                    <a href="#">Subscribete</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Go To -->

<a href="#header" class="goto-top scroll-link">
    <svg>
        <img class="up" src="images/up.png"/>
    </svg>
</a>


<!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<!-- Animate On Scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JavaScript -->
<script src="./js/products.js"></script>
<script src="./js/index.js"></script>
<script src="./js/slider.js"></script>

</body>

</html>
