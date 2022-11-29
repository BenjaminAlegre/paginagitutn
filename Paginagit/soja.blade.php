<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
    <!-- Animate On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css" />

    <title>Aromas Sagrados</title>
</head>

<body>
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

    <div class="page__title-area">
        <div class="container">
            <div class="page__title-container">
                <ul class="page__titles">
                    <li>
                        <a href="/">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-home"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="page__title">Velas de soja</li>
                </ul>
            </div>
        </div>
    </div>
</header>
</body>
<main id="main">
    <div class="container">
        <!-- Products Details -->
        <section class="section product-details__section">
            <div class="product-detail__container">
                <div class="product-detail__left">
                    <div class="details__container--left">
                        <div class="product__pictures">
                            <div class="pictures__container">
                                <img class="picture" src="./images/products/soja/soja1.jpg" id="pic1" />
                            </div>
                            <div class="pictures__container">
                                <img class="picture" src="./images/products/soja/soja2.jpg" id="pic2" />
                            </div>
                            <div class="pictures__container">
                                <img class="picture" src="./images/products/soja/soja3.jpg" id="pic3" />
                            </div>
                            <div class="pictures__container">
                                <img class="picture" src="./images/products/soja/soja4.jpg" id="pic4" />
                            </div>
                            <div class="pictures__container">
                                <img class="picture" src="./images/products/soja/soja5.jpg" id="pic5" />
                            </div>
                        </div>
                        <div class="product__picture" id="product__picture">
                            <!-- <div class="rect" id="rect"></div> -->
                            <div class="picture__container">
                                <img src="./images/products/soja/sojaportada.jpg" id="pic" />
                            </div>
                        </div>
                        <div class="zoom" id="zoom"></div>
                    </div>

                    <div class="product-details__btn">
                        <a class="add" href="#">
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-cart-plus"></use>
                  </svg>
                </span>
                            AÑADIR AL CARRITO</a>
                        <a class="buy" href="#">
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                  </svg>
                </span>
                            COMPRAR AHORA
                        </a>
                    </div>
                </div>

                <div class="product-detail__right">
                    <div class="product-detail__content">
                        <h3>Velas de soja Aromaticas</h3>
                        <div class="price">
                            <span class="new__price">$800</span>
                        </div>
                        <p>
                            Velas de soja aromatizadas con aromas suaves y fragantes especiales para todo tipo de masajes
                            y para relajar el ambiente en casa.
                        </p>
                        <div class="product__info-container">
                            <ul class="product__info">
                                <li class="select">
                                    <div class="select__option">
                                        <label for="colors">Aroma</label>
                                        <select name="colors" id="colors" class="select-box">
                                            <option value="vainilla">Vainilla y tabaco</option>
                                            <option value="orquidea">Orquideas y coco</option>
                                            <option value="tilo">Tiló relax</option>
                                            <option value="coco">Coco y vainilla</option>
                                            <option value="eucaliptu">Eucaliptus</option>

                                        </select>
                                    </div>

                                </li>
                                <li>

                                    <div class="input-counter">
                                        <span>Cantidad:</span>
                                        <div>
                        <span class="minus-btn">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-minus"></use>
                          </svg>
                        </span>
                                            <input type="text" min="1" value="1" max="10" class="counter-btn">
                                            <span class="plus-btn">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-plus"></use>
                          </svg>
                        </span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <span>Subtotal:</span>
                                    <a href="#" class="new__price">$800</a>
                                </li>
                                <li>
                                    <span>Marca:</span>
                                    <a href="#">La pasionaria</a>
                                </li>
                                <li>
                                    <span>Tipo de producto:</span>
                                    <a href="#">Velas</a>
                                </li>
                                <li>
                                    <span>Disponibilidad:</span>
                                    <a href="#" class="in-stock">Stock</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Related Products -->
            <section class="section related__products">
                <div class="title__container">
                    <div class="section__title filter-btn active">
                        <span class=" dot"></span>
                        <h1 class="primary__title">Quizas te interese</h1>
                    </div>
                </div>
                <div class="container" data-aos="fade-up" data-aos-duration="1200">
                    <div class="glide" id="glide_3">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides latest-center">
                                <li class="glide__slide">
                                    <div class="product">
                                        <div class="product__header">
                                            <a href="#"><img src="images/products/interes/palo.jpg" alt="product"></a>
                                        </div>
                                        <div class="product__footer">
                                            <h3>Sahumerio Palo Santo</h3>
                                            <div class="product__price">
                                                <h4>$300</h4>
                                            </div>
                                            <a href="sagrada.blade.php"><button type="submit" class="product__btn">Comprar</button></a>
                                            <ul>
                                                <li>
                                                    <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                        <svg>
                                                            <img src="images/carrito.png" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="product">
                                        <div class="product__header">
                                            <a href="#"><img src="images/products/interes/velon.jpg" alt="product"></a>
                                        </div>
                                        <div class="product__footer">
                                            <h3>Velon Blanco</h3>
                                            <div class="product__price">
                                                <h4>$600</h4>
                                            </div>
                                            <a href="velon.blade.php"><button type="submit" class="product__btn">Comprar</button></a>
                                        </div>
                                        <ul>
                                            <li>
                                                <a data-tip="Add To Wishlist" data-place="left" href="#">
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
                                            <a href="#"><img src="images/products/interes/aceite1.png" alt="product"></a>
                                        </div>
                                        <div class="product__footer">
                                            <h3>Aceite Escencial Lavanda</h3>
                                            <div class="product__price">
                                                <h4>$250</h4>
                                            </div>
                                            <a href="aceite.blade.php"><button type="submit" class="product__btn">Comprar</button></a>
                                        </div>
                                        <ul>
                                            <li>
                                                <a data-tip="Add To Wishlist" data-place="left" href="#">
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
                                            <a href="aceite.blade.php"><img src="images/products/interes/aceite2.png" alt="product"></a>
                                        </div>
                                        <div class="product__footer">
                                            <h3>Aceite Escencial Rosa Mosqueta</h3>
                                            <div class="product__price">
                                                <h4>$250</h4>
                                            </div>
                                            <a href="#"><button type="submit" class="product__btn">Comprar</button></a>
                                        </div>
                                        <ul>
                                            <ul>
                                                <li>
                                                    <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                        <svg>
                                                            <img src="images/carrito.png" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </ul>
                                    </div>
                            </ul>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
                                    </svg>
                                </button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        </section>
    </div>
    <!-- Latest Products -->



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
                    <a href="#">Historial de compra</a>
                </div>
                <div class="footer-top__box">
                    <h3>CONTACTENOS</h3>
                    <div>
                        Calle siempre viva 2500, Palermo.
                    </div>
                    <div>
                        sahumeriossagrados@gmail.com
                    </div>
                    <div>
                        11-55555555
                    </div>
                    <div>
                        CABA, Argentina
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
    </footer>
    </section>





    <!-- End Footer -->

    <!-- Go To -->

    <a href="#header" class="goto-top scroll-link">
        <svg>
            <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
        </svg>
    </a>

    <!-- Glide Carousel Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script src="./js/productos%20js/soja.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/slider.js"></script>
    </body>
</main>
</html>
