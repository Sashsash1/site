<?php
include "path.php";
include 'app/database/db.php';
?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="assets/IMG/SB.ico"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/CSS/test.css">

    <title>All Tours</title>
</head>
<body>
    <?php  include("app/include/header.php");?>
    <!------------------------PAGE What is your life-style?--------------------------->
    <div class="life-style__page">
        <div class="life-style__container _container">
            <div class="life-style__header header-block">
                <h2 class="life-style__title">What is your life style?</h2>
                <div class="life-style__sub-title">Find yourself</div>
            </div>
        </div>
    </div>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!--1 card-->
                <div class="swiper-slide">
                    <img class="style__img" src="assets/IMG/YourStyleTravel/ПОХОД.jpg" alt="Hike">

                    <hr class="style__hr">

                    <div class="style__text">HIKE</div>

                    <div class="style__sub-text">Hiking benefits the body, and traveling to the mountains is <br>
                        doubly beneficial. Climbing mountains helps develop <br>
                        willpower and stress resistance. Mountain tourism teaches <br>
                        life skills in nature: the ability to build a fire, put up tents, <br>
                        tie reliable knots.
                    </div>

                    <button class="style__btn underline">Read more</button>
                </div>
                <!--2 card-->
                <div class="swiper-slide">
                    <img class="style__img" src="assets/IMG/YourStyleTravel/ЭКСПЕДИЦИЯ.png" alt="EXPEDITION">

                    <hr class="style__hr2">

                    <div class="style__text">EXPEDITION</div>

                    <div class="style__sub-text">The North Pole is one of the most amazing places on our <br>
                        planet. Just imagine traveling to this Kingdom of snow and <br>
                        ice. Here you can truly breathe in the fresh polar air, see <br>
                        rare animals, drifting multi-year ice and take unforgettable <br>
                        photos on the "Top of the World" itself.</div>

                    <button class="style__btn underline">Read more</button></div>

                <!--3 card-->
                <div class="swiper-slide">
                    <img class="style__img" src="assets/IMG/YourStyleTravel/НАУЧНЫЙ.png" alt="SCIENTIFIC">

                    <hr class="style__hr3">

                    <div class="style__text">SCIENTIFIC</div>

                    <div class="style__sub-text">Scientific tourism - aimed at participation in research <br>
                        programs. Scientific tourism includes field research, <br>
                        archaeological expeditions, the study of flora and fauna, etc. <br>
                        Scientific tourism is organically combined with a cultural <br>
                        program: sightseeing, museums, temples.</div>

                    <button class="style__btn underline">Read more</button>
                </div>
                <!--4 card-->
                <div class="swiper-slide">
                    <img class="style__img" src="assets/IMG/YourStyleTravel/ECOtour.png" alt="ECO TOURISM">

                    <hr class="style__hr4">

                    <div class="style__text">ECO</div>

                    <div class="style__sub-text">Ecotourism is a sustainable form of tourism that involves <br>
                        travel to relatively untouched places, as well as the <br>
                        preservation of the original cleanliness of the area.</div>

                    <button class="style__btn underline">Read more</button>
                </div>
                <!--5 card-->
                <div class="swiper-slide">
                    <img class="style__img" src="assets/IMG/YourStyleTravel/DIVING2.png" alt="DIVING">

                    <hr class="style__hr5">

                    <div class="style__text">DIVING</div>

                    <div class="style__sub-text">Diving tours are an exciting journey into the underwater <br>
                        world. An extraordinary sight of coral thickets, flowers and <br>
                        algae, insidious jellyfish, graceful snakes, sharks, cuttlefish <br>
                        lighting the way - all this and much more is offered <br>
                        to diving enthusiasts.</div>

                    <button class="style__btn underline">Read more</button>
                </div>
                <!--6 card-->
                <div class="swiper-slide">
                    <img class="style__img" src="assets/IMG/YourStyleTravel/pilgrimage.png" alt="PILGRIMAGE">

                    <hr class="style__hr6">

                    <div class="style__text">PILGRIMAGE</div>

                    <div class="style__sub-text">Pilgrimage tourism is a set of trips of representatives of <br>
                        various faiths for pilgrimage purposes. Pilgrimage is the <br>
                        desire of believers to bow to holy places.</div>

                    <button class="style__btn underline">Read more</button>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script src="assets/JS/ALLtours.js"></script>
</body>
    </html><?php
