<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">


    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css" />

    <title>Aromas Sagrados</title>
</head>



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
                        <span class="nav__category">PHONE</span>
                        <a href="#" class="close__toggle">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-cross"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.blade.php" class="nav__link scroll-link">Inicio</a>
                        </li>
                        <li class="nav__item">
                            <a href="todos.blade.php" class="nav__link scroll-link">Productos</a>
                        </li>
                        <li class="nav__item">
                            <a href="contact.blade.php" class="nav__link scroll-link">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<main>
        <body>


        <head>
            <title>Contact form</title>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
            <link  rel="stylesheet">
            <style>
                .main-block {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
                    background: #1c87c9;
                }
                form {
                    padding: 25px;
                    margin: 25px;
                    box-shadow: 0 2px 5px #f5f5f5;
                    background: #f5f5f5;
                }
                .fas {
                    margin: 25px 10px 0;
                    font-size: 72px;
                    color: #fff;
                }
                .fa-envelope {
                    transform: rotate(-20deg);
                }
                .fa-at , .fa-mail-bulk{
                    transform: rotate(10deg);
                }
                input, textarea {
                    width: calc(100% - 18px);
                    padding: 8px;
                    margin-bottom: 20px;
                    border: 1px solid #1c87c9;
                    outline: none;
                }
                input::placeholder {
                    color: #666;
                }
                button {
                    width: 100%;
                    padding: 10px;
                    border: none;
                    background: #1c87c9;
                    font-size: 16px;
                    font-weight: 400;
                    color: #fff;
                }
                button:hover {
                    background: #2371a0;
                }
                @media (min-width: 568px) {
                    .main-block {
                        flex-direction: row;
                    }
                    .left-part, form {
                        width: 50%;
                    }
                    .fa-envelope {
                        margin-top: 0;
                        margin-left: 20%;
                    }
                    .fa-at {
                        margin-top: -10%;
                        margin-left: 65%;
                    }
                    .fa-mail-bulk {
                        margin-top: 2%;
                        margin-left: 28%;
                    }
                }
            </style>
        </head>
        <body>
        <div class="main-block">
            <div class="left-part">
                <i class="fas fa-envelope"></i>
                <i class="fas fa-at"></i>
                <i class="fas fa-mail-bulk"></i>
            </div>
            <form action="/">
                <h1>¡Contactenos!</h1>
                <div class="info">
                    <input class="name" type="text" name="name" placeholder="Nombre">
                    <input type="text" name="name" placeholder="Email">
                    <input type="text" name="name" placeholder="Numero de telefono">
                </div>
                <p>Mensaje</p>
                <div>
                    <textarea rows="4"></textarea>
                </div>
                <button type="submit" href="/">Enviar</button>
            </form>
        </div>




        </body>

        </body>
    </main>
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

    <!-- Glide Carousel Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script src="./js/products.js"></script>
    <script src="./js/slider.js"></script>
</header>


</html>
