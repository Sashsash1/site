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
    <link rel="stylesheet" href="assets/CSS/simpleT.css">
    <title>All tours</title>

</head>
<body>
<?php  include("app/include/header.php");?>

<!------------------main----------------------->
<main class="page">
    <div class="page__main-block main-block">
        <div class="main-block__container _container">
            <div class="main-block__body">
                <h1 class="main-block__title _anim-items _anim-no-hide">We Take Care <br>
                    of Your Trip </h1>
                <div class="main-block__text _anim-items">We believe in a travelling
                    experience by providing our tour plan that suits your the best!
                </div>
            </div>
            <div class="main-block__button">
                <a href="#" class="main-block__button_a _anim-items _anim-no-hide">Book a Trip ></a>
            </div>
        </div>
        <img src="assets/IMG/Страны/фон.png" alt="" class="fon"/>
        <img src="assets/IMG/Страны/здание.png" alt="" class="building"/>
        <img src="assets/IMG/Страны/камни.png" alt="" class="stone"/>
        <div class="main__image">
        </div>
    </div>
</main>
<!--------------- / main------------------------>
<!------------------------PAGE Recommends Tour--------------------------->

<div class="rec-tour__page">
    <div class="rec-tour__container _container">
        <div class="rec-tour__header header-block">
            <h2 class="rec-tour__title">Recommended Tours</h2>
            <div class="rec-tour__sub-title">Most popular tours right now</div>
        </div>
    </div>
</div>
<!----Нижние карточки----->

<div class="rec-card__container">

    <div class="card__background">
        <div class="rec-card_img">
            <img src="assets/IMG/card/Japan.png" alt="Japan">
        </div>
        <div class="name__location">JAPAN</div>
        <div class="rec-card__location">
            <img class="loc__img" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text">Tokio</div>
        </div>
        <hr class="loc__hr1">
        <hr class="loc__hr2">
        <div class="rec-card__cost">
            <div class="name__cost">Culture Relax</div>
            <div class="card__price">4700$</div>
        </div>
        <div class="card__about-place">In Japan, you can combine many types of <br>
            recreation: a breathtaking "excursion", a <br>
            beach holiday on the island of Okinawa, <br>
            holidays in ski and thermal resorts, trips to study martial arts.
        </div>
        <button class="like-button">
            <div class="like-wrapper">
                <div class="ripple"></div>

                <div class="particles" style="--total-particles: 6">
                    <div class="particle" style="--i: 1; --color: #7642F0"></div>
                    <div class="particle" style="--i: 2; --color: #AFD27F"></div>
                    <div class="particle" style="--i: 3; --color: #DE8F4F"></div>
                    <div class="particle" style="--i: 4; --color: #D0516B"></div>
                    <div class="particle" style="--i: 5; --color: #5686F2"></div>
                    <div class="particle" style="--i: 6; --color: #D53EF3"></div>
                </div>
            </div>
        </button>
        <div class="rec-card__button">
            <a href="#" class="card__vish">
                <img src="assets/IMG/card/heart.png" alt="" class="img__heart">
            </a>
            <button class="learn-more">
                <a href="<?php echo BASE_URL . 'Japan.php';?>">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                    <span class="button-text">Explore</span>
                </a>
            </button>
        </div>
    </div>

    <div class="card__background2">
        <div class="rec-card_img2">
            <img src="assets/IMG/card/Egypt.png" alt="Egypt">
        </div>
        <div class="name__location2">EGYPT</div>
        <div class="rec-card__location2">
            <img class="loc__img2" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text2">Cairo</div>
        </div>
        <hr class="loc__hr12">
        <hr class="loc__hr22">
        <div class="rec-card__cost2">
            <div class="name__cost2">Culture Relax</div>
            <div class="card__price2">4000$</div>
        </div>
        <div class="card__about-place2">Holidays in Egypt are magnificent Hurghada, <br>
            the popular Sharm el-Sheikh, El Gouna,
            which is called the Egyptian Venice, the climatic <br>
            sanatorium of Safaga, Makadi Bay, Dahab, <br>
            Taba, which is loved by divers.
        </div>
        <button class="like-button2">
            <div class="like-wrapper2">
                <div class="ripple2"></div>
                <svg class="heart2" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
                </svg>
                <div class="particles2" style="--total-particles: 6">
                    <div class="particle2" style="--i: 1; --color: #7642F0"></div>
                    <div class="particle2" style="--i: 2; --color: #AFD27F"></div>
                    <div class="particle2" style="--i: 3; --color: #DE8F4F"></div>
                    <div class="particle2" style="--i: 4; --color: #D0516B"></div>
                    <div class="particle2" style="--i: 5; --color: #5686F2"></div>
                    <div class="particle2" style="--i: 6; --color: #D53EF3"></div>
                </div>
            </div>
        </button>
        <div class="rec-card__button2">
            <a href="#" class="card__vish2">
                <img src="assets/IMG/card/heart.png" alt="" class="img__heart2">
            </a>
            <button class="learn-more2">
                <a href="<?php echo BASE_URL . 'Egypt.php';?>">
                        <span class="circle2" aria-hidden="true">
                            <span class="icon2 arrow2"></span>
                        </span>
                <span class="button-text2">Explore</span>
                </a>
            </button>
        </div>
    </div>

    <div class="card__background3">
        <div class="rec-card_img3">
            <img src="assets/IMG/card/Greece.png" alt="Greece">
        </div>
        <div class="name__location3">GREECE</div>
        <div class="rec-card__location3">
            <img class="loc__img3" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text3">Athens</div>
        </div>
        <hr class="loc__hr13">
        <hr class="loc__hr23">
        <div class="rec-card__cost3">
            <div class="name__cost3">Culture Relax</div>
            <div class="card__price3">3200$</div>
        </div>
        <div class="card__about-place3">Picturesque landscapes, heavenly beaches and islands, luxurious hotel complexes, many ancient temples, ruins, the sacred Mount Athos, delicious wine and Mediterranean cuisine with an abundance of seafood.
        </div>
        <button class="like-button3">
            <div class="like-wrapper3">
                <div class="ripple3"></div>
                <div class="particles3" style="--total-particles: 6">
                    <div class="particle3" style="--i: 1; --color: #7642F0"></div>
                    <div class="particle3" style="--i: 2; --color: #AFD27F"></div>
                    <div class="particle3" style="--i: 3; --color: #DE8F4F"></div>
                    <div class="particle3" style="--i: 4; --color: #D0516B"></div>
                    <div class="particle3" style="--i: 5; --color: #5686F2"></div>
                    <div class="particle3" style="--i: 6; --color: #D53EF3"></div>
                </div>
            </div>
        </button>
        <div class="rec-card__button3">
            <a href="#" class="card__vish3">
                <img src="assets/IMG/card/heart.png" alt="" class="img__heart3">
            </a>
            <button class="learn-more3">
                        <span class="circle3" aria-hidden="true">
                            <span class="icon3 arrow3"></span>
                        </span>
                <span class="button-text3">Explore</span>
            </button>
        </div>
    </div>

    <div class="card__background4">
        <div class="rec-card_img4">
            <img src="assets/IMG/Страны/CHILE.png" alt="Chile">
        </div>
        <div class="name__location4">CHILE</div>
        <div class="rec-card__location4">
            <img class="loc__img4" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text4">Santiago</div>
        </div>
        <hr class="loc__hr14">
        <hr class="loc__hr24">
        <div class="rec-card__cost4">
            <div class="name__cost4">Culture Relax</div>
            <div class="card__price4">3900$</div>
        </div>
        <div class="card__about-place4">
            The beautiful Pacific coast with well-
            maintained beaches, the mysterious Easter
            Island, hot geysers, blue lakes and the famous
            Patagonia, so vividly described in the novels of Jules Verne.
            <button class="like-button4">
                <div class="like-wrapper4">
                    <div class="ripple4"></div>
                    <div class="particles4" style="--total-particles: 6">
                        <div class="particle4" style="--i: 1; --color: #7642F0"></div>
                        <div class="particle4" style="--i: 2; --color: #AFD27F"></div>
                        <div class="particle4" style="--i: 3; --color: #DE8F4F"></div>
                        <div class="particle4" style="--i: 4; --color: #D0516B"></div>
                        <div class="particle4" style="--i: 5; --color: #5686F2"></div>
                        <div class="particle4" style="--i: 6; --color: #D53EF3"></div>
                    </div>
                </div>
            </button>
            <div class="rec-card__button4">
                <a href="#" class="card__vish4">
                    <img src="assets/IMG/card/heart.png" alt="" class="img__heart4">
                </a>
                <button class="learn-more4">
                        <span class="circle4" aria-hidden="true">
                            <span class="icon4 arrow4"></span>
                        </span>
                    <span class="button-text4">Explore</span>
                </button>
            </div>
        </div>
    </div>

    <div class="card__background5">
        <div class="rec-card_img5">
            <img src="assets/IMG/card/Thailand.png" alt="Thailand">
        </div>
        <div class="name__location5">THAILAND</div>
        <div class="rec-card__location5">
            <img class="loc__img5" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text5">Bangkok</div>
        </div>
        <hr class="loc__hr15">
        <hr class="loc__hr25">
        <div class="rec-card__cost5">
            <div class="name__cost5">Culture Relax</div>
            <div class="card__price5">3000$</div>
        </div>
        <div class="card__about-place5">
            Thailand is an amazing country. Coral reefs,
            Buddhist temples, exotic plants, crocodile
            farms. Modern Bangkok and incendiary club
            Pattaya, the exotic islands of Samet and Koh
            Chang and the fantastic cliffs of Krabi.
            <button class="like-button5">
                <div class="like-wrapper5">
                    <div class="ripple5"></div>
                    <div class="particles5" style="--total-particles: 6">
                        <div class="particle5" style="--i: 1; --color: #7642F0"></div>
                        <div class="particle5" style="--i: 2; --color: #AFD27F"></div>
                        <div class="particle5" style="--i: 3; --color: #DE8F4F"></div>
                        <div class="particle5" style="--i: 4; --color: #D0516B"></div>
                        <div class="particle5" style="--i: 5; --color: #5686F2"></div>
                        <div class="particle5" style="--i: 6; --color: #D53EF3"></div>
                    </div>
                </div>
            </button>
            <div class="rec-card__button5">
                <a href="#" class="card__vish5">
                    <img src="assets/IMG/card/heart.png" alt="" class="img__heart5">
                </a>
                <button class="learn-more5">
                    <a href="<?php echo BASE_URL . 'Thailand.php';?>">
                        <span class="circle5" aria-hidden="true">
                            <span class="icon5 arrow5"></span>
                        </span>
                    <span class="button-text5">Explore</span>
                    </a>
                </button>
            </div>
        </div>
    </div>

    <div class="card__background6">
        <div class="rec-card_img6">
            <img src="assets/IMG/card/Morocco.png" alt="Morocco">
        </div>
        <div class="name__location6">MOROCCO</div>
        <div class="rec-card__location6">
            <img class="loc__img6" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text6">Rabat</div>
        </div>
        <hr class="loc__hr16">
        <hr class="loc__hr26">
        <div class="rec-card__cost6">
            <div class="name__cost6">Culture Relax</div>
            <div class="card__price6">2800$</div>
        </div>
        <div class="card__about-place6">
            Morocco is an exotic country with golden
            beaches, deep gorges and the moving sandy
            seas of the Sahara. You can explore the old
            cities of the empire - Marrakech, Rabat, etc.
            <button class="like-button6">
                <div class="like-wrapper6">
                    <div class="ripple6"></div>
                    <div class="particles6" style="--total-particles: 6">
                        <div class="particle6" style="--i: 1; --color: #7642F0"></div>
                        <div class="particle6" style="--i: 2; --color: #AFD27F"></div>
                        <div class="particle6" style="--i: 3; --color: #DE8F4F"></div>
                        <div class="particle6" style="--i: 4; --color: #D0516B"></div>
                        <div class="particle6" style="--i: 5; --color: #5686F2"></div>
                        <div class="particle6" style="--i: 6; --color: #D53EF3"></div>
                    </div>
                </div>
            </button>
            <div class="rec-card__button6">
                <a href="#" class="card__vish6">
                    <img src="assets/IMG/card/heart.png" alt="" class="img__heart5">
                </a>
                <button class="learn-more6">
                        <span class="circle6" aria-hidden="true">
                            <span class="icon6 arrow6"></span>
                        </span>
                    <span class="button-text6">Explore</span>
                </button>
            </div>
        </div>
    </div>

    <div class="card__background7">
        <div class="rec-card_img7">
            <img src="assets/IMG/Страны/CHINA.png" alt="China">
        </div>
        <div class="name__location7">CHINA</div>
        <div class="rec-card__location7">
            <img class="loc__img7" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text7">Beijing</div>
        </div>
        <hr class="loc__hr17">
        <hr class="loc__hr27">
        <div class="rec-card__cost7">
            <div class="name__cost7">Culture Relax</div>
            <div class="card__price7">2100$</div>
        </div>
        <div class="card__about-place7">
            China is ancient traditions and innovations from the future,
            concrete and glass skyscrapers and small houses with lions
            manage to coexist with each other, surprising tourists with
            their culture and scope.
            <button class="like-button7">
                <div class="like-wrapper7">
                    <div class="ripple7"></div>
                    <div class="particles7" style="--total-particles: 6">
                        <div class="particle7" style="--i: 1; --color: #7642F0"></div>
                        <div class="particle7" style="--i: 2; --color: #AFD27F"></div>
                        <div class="particle7" style="--i: 3; --color: #DE8F4F"></div>
                        <div class="particle7" style="--i: 4; --color: #D0516B"></div>
                        <div class="particle7" style="--i: 5; --color: #5686F2"></div>
                        <div class="particle7" style="--i: 6; --color: #D53EF3"></div>
                    </div>
                </div>
            </button>
            <div class="rec-card__button7">
                <a href="#" class="card__vish7">
                    <img src="assets/IMG/card/heart.png" alt="" class="img__heart7">
                </a>
                <button class="learn-more7">
                        <span class="circle7" aria-hidden="true">
                            <span class="icon7 arrow7"></span>
                        </span>
                    <span class="button-text7">Explore</span>
                </button>
            </div>
        </div>
    </div>

    <div class="card__background8">
        <div class="rec-card_img8">
            <img src="assets/IMG/Страны/Перу.png" alt="Peru">
        </div>
        <div class="name__location8">PERU</div>
        <div class="rec-card__location8">
            <img class="loc__img8" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text8">Lima</div>
        </div>
        <hr class="loc__hr18">
        <hr class="loc__hr28">
        <div class="rec-card__cost8">
            <div class="name__cost8">Culture Relax</div>
            <div class="card__price8">1800$</div>
        </div>
        <div class="card__about-place8">
            A combined tour of Bolivia and Peru is a trip for those who are
            not interested in a beach holiday or quick runs through well-worn
            European cities. Everyone who chooses a tour of Peru will be able
            to feel like a pioneer.
            <button class="like-button8">
                <div class="like-wrapper8">
                    <div class="ripple8"></div>
                    <div class="particles8" style="--total-particles: 6">
                        <div class="particle8" style="--i: 1; --color: #7642F0"></div>
                        <div class="particle8" style="--i: 2; --color: #AFD27F"></div>
                        <div class="particle8" style="--i: 3; --color: #DE8F4F"></div>
                        <div class="particle8" style="--i: 4; --color: #D0516B"></div>
                        <div class="particle8" style="--i: 5; --color: #5686F2"></div>
                        <div class="particle8" style="--i: 6; --color: #D53EF3"></div>
                    </div>
                </div>
            </button>
            <div class="rec-card__button8">
                <a href="#" class="card__vish8">
                    <img src="assets/IMG/card/heart.png" alt="" class="img__heart8">
                </a>
                <button class="learn-more8">
                        <span class="circle8" aria-hidden="true">
                            <span class="icon8 arrow8"></span>
                        </span>
                    <span class="button-text8">Explore</span>
                </button>
            </div>
        </div>
    </div>

    <div class="card__background9">
        <div class="rec-card_img9">
            <img src="assets/IMG/Страны/Австралия.png" alt="Australia">
        </div>
        <div class="name__location9">AUSTRALIA</div>
        <div class="rec-card__location9">
            <img class="loc__img9" src="assets/IMG/card/Location.png" alt="Location image">
            <div class="loc__text9">Canberra</div>
        </div>
        <hr class="loc__hr19">
        <hr class="loc__hr29">
        <div class="rec-card__cost9">
            <div class="name__cost9">Culture Relax</div>
            <div class="card__price9">3100$</div>
        </div>
        <div class="card__about-place9">
            Australia is a country of amazing landscapes and unique monuments.
            In our century, thousands of tourists seek to visit the country of
            the Blue Mountains, crystal sea water.
            <button class="like-button9">
                <div class="like-wrapper9">
                    <div class="ripple9"></div>
                    <div class="particles9" style="--total-particles: 6">
                        <div class="particle9" style="--i: 1; --color: #7642F0"></div>
                        <div class="particle9" style="--i: 2; --color: #AFD27F"></div>
                        <div class="particle9" style="--i: 3; --color: #DE8F4F"></div>
                        <div class="particle9" style="--i: 4; --color: #D0516B"></div>
                        <div class="particle9" style="--i: 5; --color: #5686F2"></div>
                        <div class="particle9" style="--i: 6; --color: #D53EF3"></div>
                    </div>
                </div>
            </button>
            <div class="rec-card__button9">
                <a href="#" class="card__vish9">
                    <img src="assets/IMG/card/heart.png" alt="" class="img__heart9">
                </a>
                <button class="learn-more9">
                        <span class="circle9" aria-hidden="true">
                            <span class="icon9 arrow9"></span>
                        </span>
                    <span class="button-text9">Explore</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!------------------------ / PAGE Recommends Tour--------------------------->
<!-----------------------CONTACT US--------------------------->
<div class="contact-container">
    <div class="left-col"></div>
    <div class="right-col">
        <div class="theme-switch-wrapper"></div>

        <h1 class="h1__contact-us">Contact Us</h1>
        <p class="p__contact-us">Are you planning to go on an exciting trip in
            the near future, but not sure if you will like it? Contact us and
            find out everything about the place where you are on your way. We
            will help you with advice on where to go, what to do and find the
            best deals for your next adventure.</p>

        <form class="form" id="contact-form" method="post">

            <label class="label__contact-us" for="name">Full name *</label>
            <input class="input__contact-us _req" type="text" id="name" name="name" placeholder="Your Full Name" required>

            <label class="label__contact-us" for="email">Email Address *</label>
            <input class="input__contact-us _req _email" type="email" id="email" name="email" placeholder="Your Email Address" required>

            <label class="label__contact-us" for="message">Message *</label>
            <textarea class="input__contact-us _req" rows="10" placeholder="Your Message" id="message" name="message" required></textarea>


            <button class="btn__contact-us" type="submit" id="submit" name="submit">Send</button>

        </form>
        <div id="error"></div>
        <div id="success-msg"></div>
    </div>
</div>

<!------------------------ / CONTACT US--------------------------->
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

<script src="assets/JS/SimpleTours.js"></script>
</body>

