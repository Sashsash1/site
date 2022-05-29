<?php
    include ("path.php");
    include ("app/database/db.php");
?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/d402e6c429.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:wght@400;700&family=Montserrat:wght@400;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/OurVRtours.css">

    <title>Our VR Tours</title>

</head>
<body>

<?php  include("app/include/header.php");?>

<main class="page">
    <div class="page__main-block main-block">
        <div class="main-block__container _container">
            <div class="main-block__body">
                <h1 class="main-block__title _anim-items _anim-no-hide">OUR VR TOURS</h1>
                <div class="main_sub-title _anim-items">Unimaginable Adventures</div>
                <div class="main-block__button ">
                    <a href="#" class="main-block__button_a _anim-items">View more &gt;</a>
                </div>
            </div>
        </div>
        <div class="main-block__image _ibg">
            <img src="assets/IMG/IMG_index3/Слой1.png" alt="cover">
        </div>
        <div class="main-block__image-front">
            <img src="assets/IMG/IMG_index3/передние камни.png" alt="stone">
        </div>
    </div>
</main>

<!----------------------------АНИМАЦИЯ САКУРЫ------------------------------------------->

<div class="root"></div>
<script src="https://cdn.jsdelivr.net/npm/sakura-js@1.1.1/dist/sakura.min.js"></script>

<script defer>
    var sakura = new Sakura('.root', {
        colors: [
            {
                gradientColorStart: 'rgba(255, 183, 197, 0.9)',
                gradientColorEnd: 'rgba(255, 197, 208, 0.9)',
                gradientColorDegree: 120,
            },
            {
                gradientColorStart: 'rgba(255,189,188)',
                gradientColorEnd: 'rgba(227,170,181)',
                gradientColorDegree: 120,
            },
            {
                gradientColorStart: 'rgba(212,152,163)',
                gradientColorEnd: 'rgba(242,185,196)',
                gradientColorDegree: 120,
            },
        ],
        delay: 200,
    });
</script>

<!---------------------------- / АНИМАЦИЯ САКУРЫ------------------------------------------->
<!--------------------------------ОГОНЬ-В-ДОМЕ------------------------------------>

<div class="fire">
    <div class="fire-left">
        <div class="main-fire"></div>
        <div class="particle-fire"></div>
    </div>
    <div class="fire-main">
        <div class="main-fire"></div>
        <div class="particle-fire"></div>
    </div>
    <div class="fire-right">
        <div class="main-fire"></div>
        <div class="particle-fire"></div>
    </div>
    <div class="fire-bottom">
        <div class="main-fire"></div>
    </div>
</div>

<!------------------------------ОГОНЬ-В-ЛАМПЕ---------------------------------->

<div class="fire-1">
    <div class="fire-right">
        <div class="main-fire-right"></div>
        <div class="particle-fire-right"></div>
    </div>
    <div class="fire-main-right">
        <div class="main-fire-right"></div>
        <div class="particle-fire-right"></div>
    </div>
    <div class="fire-right1">
        <div class="main-fire-right"></div>
        <div class="particle-fire-right"></div>
    </div>
    <div class="fire-bottom1">
        <div class="main-fire-right"></div>
    </div>
</div>

<!----------------------------ПРОДОЛЖЕНИЕ САЙТА------------------------------->

<div class="platforms__page">
    <div class="platforms__container _container">
        <div class="platforms__main-block main-block">
            <div class="platforms-items">
                <div class="platforms__text">Сross-platform VR</div>
                <h2 class="platforms__title _anim-items">TOGETHER WITH <br> PLATFORMS</h2>
                <div class="platforms__sub-title _anim-items">Adding cross-platform support to our VR projects has <br>
                    been our goal from the beginning. Our travels include <br>
                    a strong multiplayer experience, so by allowing friends <br>
                    to play together regardless of which helmet they own,<br>
                    we are improving the social nature of our services and <br>
                    allowing them to be used as intended.
                </div>
            </div>
            <div class="platforms__ul-cross">
                <ul class="platform-cross-1">
                    <div class="text__macOS">macOS</div>
                </ul>
                <ul class="platform-cross-2">
                    <img src="assets/IMG/IMG_index3/Windows.png" alt="Windows">
                </ul>
                <div class="platforms-windows">Windows</div>
                <ul class="platform-cross-3">
                    <img src="assets/IMG/IMG_index3/linux.png" alt="linux">
                </ul>
                <div class="platforms-linux">Linux</div>
                <ul class="platform-cross-4">
                    <img src="assets/IMG/IMG_index3/macOS.png" alt="IPhone">
                </ul>
                <div class="platforms-iphone">iPhone</div>
                <ul class="platform-cross-5">
                    <img src="assets/IMG/IMG_index3/android.png" alt="android">
                </ul>
                <div class="platforms-android">android</div>
            </div>
            <div class="platforms__image">
                <img src="assets/IMG/IMG_index3/Слой 4.png" alt="Human">
            </div>
            <div class="platforms__image-card">
                <img src="assets/IMG/IMG_index3/Слой 9.png" alt="Cards">
            </div>
        </div>
    </div>
</div>


<!----------------------------КАРТЫ------------------------------->

<div class="cards__page">
    <div class="cards__container _container">
        <div class="cards__background">
            <img src="assets/IMG/IMG_index3/фон для карт.png" alt="Background">
        </div>
    </div>
</div>


<div class="flip-container">
    <div class="flipper__card-1 _anim-items">
        <div class="front__card-1">
            <img src="assets/IMG/IMG_index3/КартаBACK.png" alt="Card Back">
        </div>
        <div class="back__card-1">
            <img src="assets/IMG/IMG_index3/Samurai.png" alt="Card Front">
        </div>
        <div class="inside__card-1">
            <img src="assets/IMG/IMG_index3/Самурай.png" alt="Samurai">
        </div>

    </div>
</div>

<div class="flip-container">
    <div class="flipper__card-2 _anim-items">
        <div class="front__card-2">
            <img src="assets/IMG/IMG_index3/КартаBACK.png" alt="Card Back">
        </div>
        <div class="back__card-2">
            <img src="assets/IMG/IMG_index3/Rome.png" alt="Card Front">
        </div>
        <div class="inside__card-2">
            <img src="assets/IMG/IMG_index3/CARD2-ROME.png" alt="Rome">
        </div>
    </div>
</div>

<div class="flip-container">
    <div class="flipper__card-3 _anim-items">
        <div class="front__card-3">
            <img src="assets/IMG/IMG_index3/КартаBACK.png" alt="Card Back">
        </div>
        <div class="back__card-3">
            <img src="assets/IMG/IMG_index3/Atlantic.png" alt="Card Front">
        </div>
        <div class="inside__card-3">
            <img src="assets/IMG/IMG_index3/морскоесущество.png" alt="Atlantic">
        </div>
    </div>
</div>


<div class="world__page">
    <div class="world__container _container">
        <div class="world__img">
            <img src="assets/IMG/IMG_index3/девушкасмаской.png" alt="Woman with mask">
        </div>
        <div class="world__header _active">Plunge into the <br> fantastic world</div>
        <div class="world__sub-title _active">Exciting adventures from the outskirts of Machu <br> Picchu to the
            Forbidden
            Palaces of China.</div>
        <div class="world__button _active">
            <a href="#" class="world__button_a _active">View more ></a>
        </div>
    </div>
</div>

<!----------------footer---------------------------------------->
<footer class="footer">
    <div class="footer__top">
        <div class="footer__main _container">
            <div class="footer__header">
                <h3 class="footer__title">Ready To <br> Travel?</h3>
                <div class="footer__sub-title">World travel agency since 2015. <br>
                    We have a large number of positive reviews.</div>
            </div>
            <div class="footer__row">
                <div class="footer__column">
                    <div class="footer__label">Company Info</div>
                    <nav class="footer__menu menu-footer">
                        <ul class="menu-footer__list">
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">About Us</a>
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">Safe tour</a>
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">Blog</a>
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">We are hiring</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="footer__column">
                    <div class="footer__label">VR-Tours</div>
                    <nav class="footer__menu menu-footer">
                        <ul class="menu-footer__list">
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">Tours with cashback</a>
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">Blog</a>
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">Online booking</a>
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">River cruises</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="footer__column">
                    <div class="footer__label">About Us</div>
                    <nav class="footer__menu menu-footer">
                        <ul class="menu-footer__list">
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">History</a>
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">Testimonials</a>
                            <li class="menu-footer__item"><a href="" class="menu-footer__link">Reviews</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="footer__column">
                    <div class="footer__label">Get In Touch</div>
                    <div class="footer__contacts contacts-footer">
                        <a href="tel:79999999999" class="contacts-footer__item contacts-footer__item_phone">+ 7 (999) 999 -
                            9999</a>
                        <a href="" class="contacts-footer__item contacts-footer__item_map">Sochi, Kyrortniy
                            avenue 50</a>
                        <a href="mailto:Gala-tour@mail.ru"
                           class="contacts-footer__item contacts-footer__item_email">Gala-tour@mail.ru</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__container _container">
                <hr class="hr__social">
                <div class="footer__copy">@ Made With Love For Diploma! </div>
                <div class="footer__social social">
                    <a href="" class="social__item">
                        <img src="assets/IMG/footer/twitter.png" alt="twitte">
                    </a>
                    <a href="" class="social__item">
                        <img src="assets/IMG/footer/facebook.png" alt="facebook">
                    </a>
                    <a href="" class="social__item">
                        <img src="assets/IMG/footer/instagram.png" alt="instagram">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!---------------- / footer---------------------------------------->
<!----------------music---------------------------------------->
<div class="play-music">
    <div id="music-animation" class="music-animation">
        <span class="bar bar1"></span>
        <span class="bar bar2"></span>
        <span class="bar bar3"></span>
        <span class="bar bar4"></span>
        <span class="bar bar5"></span>
    </div>
    <div class="music-toggle"><a onClick="togglePlay()" id="toggle" data-text-swap="Music on">Music off</a></div>
</div>
<audio id="music" loop="loop"
       src="assets/MUSIC/Hoyo-Mix and Yu-Peng Chen - Hakushin's Lullaby (OST из игры _Genshin Impact_) (radio.lol).mp3"></audio>

<!--------------- / music---------------------------------------->
<!--------------- светлячки---------------------------------------->
<canvas id="canvas"></canvas>
<!--------------- / светлячки---------------------------------------->


<script src="assets/JS/OurTours.js"></script>
</body>