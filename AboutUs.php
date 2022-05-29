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
    <link rel="stylesheet" href="assets/CSS/AboutUs.css">


    <title>About Us</title>

</head>
<body>

<?php  include("app/include/header.php");?>

<!---------------main block---------------------------------------------------------->
<main class="page">
    <div class="page__main-block main-block">
        <div class="main-block__container _container">
            <div class="main-block__body">
                <h1 class="main-block__title _anim-items _anim-no-hide">About Us</h1>
                <hr class="hr__main">
                <div class="main-block__text _anim-items">The company "SGT" is a tour operator around the world
                    <br>
                    since 2015. The main activity of the travel agency is to <br>
                    send tourists to meet new adventures. All our employees <br>
                    have at least seven years of experience in tourism, which <br>
                    allows us to provide a high level of service to our guests.
                </div>
            </div>
        </div>
        <img src="assets/IMG/IMG_index2/ЭтоОнас.png" alt="Это О Нас"/>
        <div class="main__image">
        </div>
    </div>
</main>
<!--------------- / main block---------------------------------------------------------->
<!---------------VR Page---------------------------------------------------------->
<div class="VR__page">
    <div class="VR__container _container">
        <div class="VR__image">
            <img src="assets/IMG/IMG_index2/вЛЕСУ.png" alt="What Is VR Tour?">
        </div>
        <div class="side__title-01"><span class="colortext">01</span> / VR Tour</div>
        <div class="VR__header-block__title header-block">
            <h2 class="header-block__title _anim-items">What Is <br> a <span class="colortext">VR Tour</span>?</h2>
            <hr class="hr__VR">
            <div class="header-block__sub-title">
                <p class="text__item-first _anim-items">
                    An artificial world that does not exist in nature, into which <br>
                    a person can completely immerse himself not only as an <br>
                    observer, but also as a participant. Virtual reality systems <br>
                    are technical devices and software that create for a <br>
                    person the illusion of being in this artificial world and, in <br>
                    some cases, allow him to manipulate his objects.
                </p>
                <p class="text__item-second _anim-items">
                    The basis of virtual reality is the creation of the illusion of a <br>
                    persons presence in a virtual environment. The person <br>
                    goes into it, identifies himself with the character, lives<br>
                    inthis game. Whether this system will provide complete <br>
                    immersion of a person in a virtual environment depends <br>
                    largely on the display system.
                </p>
            </div>
        </div>
    </div>
</div>
<!--------------- / VR Page---------------------------------------------------------->
<!--------------- Наша Миссия---------------------------------------------------------->
<div class="VR__page">
    <div class="VR__container _container">

        <div class="intro">
            <div class="VR__video">
                <video src="assets/video/SCR3.mp4" autoplay muted></video>
            </div>
        </div>

        <div class="side__title-01"><span class="colortext">01</span> / Our Mission</div>
        <div class="VR__header-block__title header-block">
            <h2 class="header-block__title _anim-items">Our <br><span class="colortext">Mission</span></h2>
            <hr class="hr__VR">
            <div class="header-block__sub-title">
                <p class="text__item-first _anim-items">
                    Our mission is to allow people to visit anywhere in the world, even on the
                    most difficult days. We give you the chance to ride a kayak among
                    icebergs, visit the ancient city of Machu Picchu, catch the construction
                    time of the ancient Egyptian pyramids and even send you on an <br>
                    unforgettable jungle cruise.
                </p>
                <p class="text__item-second _anim-items">
                    “In our time of social distancing, people are looking for different ways to
                    have fun, to stay active, and virtual reality provides such an opportunity,”
                    notes Oculus. “Travel to different parts of the world, play with friends, get
                    in shape or just hang out together and feel like that. it's like you're in the
                    same room - people understand what they can do with VR. "
                </p>
            </div>
        </div>
    </div>
</div>
<!--------------- / Наша Миссия---------------------------------------------------------->
<!--------------- Наши Преимущества---------------------------------------------------------->
<div class="mission__page">
    <div class="mission__container _container">

        <div class="mission__video">
            <video src="assets/video/SCR2.mp4" autoplay muted></video>
        </div>

        <div class="side__title-02"><span class="colortext">02</span> / What Is a VR</div>
        <div class="mission__header-block__title header-block">
            <h2 class="header-block__title-mission _anim-items">What Is a<br><span class="colortext">VR</span>?
            </h2>
            <hr class="hr__mission">
            <div class="header-block__sub-title-mission ">
                <p class="text__item-first-mission _anim-items">
                    An artificial world that does not exist in nature, into which <br>
                    a person can completely immerse himself not only as an <br>
                    observer, but also as a participant. Virtual reality systems <br>
                    are technical devices and software that create for a <br>
                    person the illusion of being in this artificial world and, in <br>
                    some cases, allow him to manipulate his objects.
                </p>
                <p class="text__item-second-mission _anim-items">
                    The basis of virtual reality is the creation of the illusion of a <br>
                    persons presence in a virtual environment. The person <br>
                    goes into it, identifies himself with the character, lives<br>
                    inthis game. Whether this system will provide complete <br>
                    immersion of a person in a virtual environment depends <br>
                    largely on the display system.
                </p>
            </div>
        </div>
    </div>
</div>
<!--------------- / Наши Преимущества---------------------------------------------------------->
<div class="advantages__page">
    <div class="advantages__container _container">

        <div class="advantages__video">
            <video src="assets/video/SCR4.mp4" autoplay muted></video>
        </div>

        <div class="side__title-03"><span class="colortext">03</span> / Our Advantages</div>
        <div class="advantages__header-block header-block">
            <h2 class="header-block__title-advantages _anim-items">Our <br><span
                        class="colortext">Advantages</span></h2>
            <hr class="hr__advantages">
            <div class="header-block__sub-title-advantages">
                <p class="text__item-first-advantages _anim-items">
                    <span class="colortext__advantages ">Great opportunities.</span> <br><br>
                    Considering the pros and cons of VR, many dwell on the main <br>
                    positive aspect of the technology - the expansion of the usual <br>
                    human capabilities. Thanks to special glasses, you can completely <br>
                    immerse yourself in the game or go on a trip to any country. Such a <br>
                    "trip" does not require financial costs, but it will cause a lot of <br>
                    positive emotions.
                </p>
                <br>
                <br>
                <p class="text__item-second-advantages _anim-items">
                    <span class="colortext__advantages ">The path to thinking outside the box.</span><br><br>
                    One of the advantages of immersion in virtual reality is the need to <br>
                    quickly respond to unusual situations. A person is forced to make <br>
                    quick decisions, and sometimes think outside the box. This practice <br>
                    can have a positive effect on a person in real life.
                </p>
            </div>
        </div>
    </div>
</div>
<!-----------FOOTER---------------------------------------------------------->
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
<!----------- / FOOTER---------------------------------------------------------->
<script src="assets/JS/AboutUs.js"></script>
</body>