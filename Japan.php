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
    <link rel="stylesheet" href="assets/CSS/Japan.css">


    <title>Japan</title>

</head>
<body>

<?php  include("app/include/header.php");?>


<!------------------------MAIN BLOCK--------------------------->
    <main class="page">
        <div class="page__main-block main-block">
            <div class="main-block__container _container">
                <div class="main-block__body">
                    <h1 class="main-block__title _anim-items _anim-no-hide">WELCOME TO <br> JAPAN</h1>
                    <div class="main_sub-title _anim-items">In Japan, you can combine many types of recreation: <br>
                        a breathtaking "excursion", a beach holiday on the <br>
                        island of Okinawa, holidays in ski and thermal resorts, <br>
                        trips to study martial arts.</div>
                </div>
            </div>
            <div class="main-block__image">
                <img src="assets/IMG/ЯПОНИЯ/MAIN-Japan.png" alt="stone">
            </div>
        </div>
    </main>

<!----------PAGE TIMELINE----------------------------------------------->
<div class="programme_container _container">
    <div class="programme__title">Tour Program</div>
</div>
<!--
<div class="papyrus__background">
    <img src="assets/IMG/ЯПОНИЯ/ЯпонскийФон.png" alt="Фон"">
</div>
-->
<section class="timeline">
    <div class="containerTime">
        <div class="timeline-item1">
            <div class="timeline-img"></div>
            <div class="timeline-content">
                <h2 class="h2__time-line">Departure from Russia to Japan</h2>
                <div class="date">1 DAY</div>
                <p class="p__time-line">Upon arrival in Japan, a transfer will take you to a hotel in the city center
                    (overnight at the hotel is included in the program price).<br>
                    <br>
                    Today you will be able to independently explore this largest city in Japan - Tokyo.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img__big"></div>
            <div class="timeline-content timeline-card ">
                <div class="timeline-img-header">
                    <h2 class="h2__time-line2">Tokyo</h2>
                </div>
                <div class="date">2 DAY</div>
                <p class="p__time-line2">First half of the day - arrival at Narita
                    International Airport in Tokyo. Passage of customs formalities,
                    meeting with a Russian-speaking guide in the arrivals hall, transfer
                    to Tokyo by bus. Arrival at the Shinagawa Prince Hotel Main Tower.
                    Free time.</p>
            </div>
        </div>

        <div class="timeline-item1">
            <div class="timeline-img"></div>
            <div class="timeline-content">
                <h2 class="h2__time-line">Tokyo</h2>
                <div class="date">3 DAY</div>
                <p class="p__time-line">Breakfast in the hotel. At 9:00 a.m.,
                    Tokyo sightseeing tour with a guide. You will visit the Shinjuku
                    area, the Buddhist temple Asakusa Sensoji and the shopping street
                    Nakamise, visit the Odaiba artificial islands area, the square in
                    front of the Imperial Palace. The program includes lunch at a Japanese
                    restaurant. 18:00 - return to the hotel. Free time.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img__big"></div>
            <div class="timeline-content timeline-card ">
                <div class="timeline-img-header">
                    <h2 class="h2__time-line2">Matsumoto</h2>
                </div>
                <div class="date">4 DAY</div>
                <p class="p__time-line2">At 8:00 am, after breakfast, check out from
                    the hotel. Moving to Matsumoto. Matsumoto Castle is a national
                    treasure in Japan. There you will see the country's first elementary
                    school "Kaiti" and visit the Clock Museum. After the tour - lunch, then,
                    at 16:30 - transfer by bus to the hotel</p>
            </div>
        </div>

        <div class="timeline-item1">
            <div class="timeline-img"></div>
            <div class="timeline-content">
                <h2 class="h2__time-line">Takayama – Shirakawa</h2>
                <div class="date">5 DAY</div>
                <p class="p__time-line">Breakfast in the hotel. 8:30 - meeting with the
                    guide in the lobby, check out from the hotel. Walking tour of
                    Takayama City with a visit to the medieval office of Jin-ya, a walk
                    through the Miyagawa morning market, the old quarter and a visit to
                    the historical museum. In the evening, you will board a bus that will
                    take you to Kanazawa City. 18:30 - arrival at the hotel, check-in, free
                    time.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img__big"></div>
            <div class="timeline-content timeline-card ">
                <div class="timeline-img-header">
                    <h2 class="h2__time-line2">Kanazawa</h2>
                </div>
                <div class="date">6 DAY</div>
                <p class="p__time-line2">Breakfast. Check out from the hotel - transfer to
                    Kanazawa. Walk through the Japanese city, walk through the garden,
                    see Kanazawa Castle, and visit the area of samurai
                    houses and tea street Higashi-chai. After there will be a
                    transfer to Osaka.</p>
            </div>
        </div>

        <div class="timeline-item1">
            <div class="timeline-img"></div>
            <div class="timeline-content">
                <h2 class="h2__time-line">Osaka</h2>
                <div class="date">7 DAY</div>
                <p class="p__time-line">Breakfast in the hotel. 10:00 - meeting with
                    the guide in the lobby, the beginning of the city tour with a tour
                    of the observation deck of the Umeda Sky building, Osaka Castle,
                    Kaiyukan Aquarium. The program includes lunch. 18:00 - return to
                    the hotel, rest.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img__big"></div>
            <div class="timeline-content timeline-card ">
                <div class="timeline-img-header">
                    <h2 class="h2__time-line2">Kobe</h2>
                </div>
                <div class="date">8 DAY</div>
                <p class="p__time-line2">After breakfast and check out from the hotel
                    is at 9:00, you will go to the city of Kobe. There, a visit to the
                    Arima hot springs, a walk through Chinatown and a visit to the
                    tower of the port of Kobe are planned. After lunch, you will go to the
                    city of Okayama. Check in hotel.</p>
            </div>
        </div>

        <div class="timeline-item1">
            <div class="timeline-img"></div>
            <div class="timeline-content">
                <h2 class="h2__time-line">Okayama - Kurashiki - Hiroshima</h2>
                <div class="date">9 DAY</div>
                <p class="p__time-line">Breakfast in the hotel. 09:00 - meeting with
                    the guide, check out from the hotel. Tour of Okayama and Kurashiki,
                    including a visit to the Japanese garden Korakue-en, the Ohara
                    Museum of Art and a walk along the streets of Kurashiki. 16:00 -
                    transfer to the city of Hiroshima. Check-in at the hotel, free time.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img__big"></div>
            <div class="timeline-content timeline-card ">
                <div class="timeline-img-header">
                    <h2 class="h2__time-line2">Hiroshima - Miyajima</h2>
                </div>
                <div class="date">10 DAY</div>
                <p class="p__time-line2">After breakfast, you will go on a guided
                    tour of Miyajima Island and the city of Hiroshima. You will see
                    Itsukushima Shinto Shrine on the water, Tahoto Pagoda, Hiroshima
                    Peace Park and the Atomic Bomb Museum. In the evening, return to
                    the hotel in Hiroshima.</p>
            </div>
        </div>

        <div class="timeline-item1">
            <div class="timeline-img"></div>
            <div class="timeline-content">
                <h2 class="h2__time-line">Okayama - Kurashiki - Hiroshima</h2>
                <div class="date">11 DAY</div>
                <p class="p__time-line">After checking out from your hotel, your guide
                    will take you to Hiroshima Station. Boarding the Shinkansen bullet
                    train on your own will take you to Kyoto, where you will join the
                    Monthly Japan Tour group. Visiting the Buddhist temple Todai-ji and
                    the Big Buddha, a walk in Nara Park, visiting the Shinto shrine
                    Kasuga-Taicha. Check-in hotel.</p>
            </div>
        </div>
    </div>
</section>

<!----------footer----------------------------------------------->
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
<!---------- / footer----------------------------------------------->
</body>
</html>
