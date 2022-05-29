<?php
    include "path.php";
    include "app/controllers/topics.php";
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

    <link rel="stylesheet" href="assets/CSS/topik1.css">
    <title>Article #2</title>
</head>
<body>

<!--------------------СТАТЬЯ 1-------------------------------------------------->
<div class="wrapme">
    <div class="search-bar">
        <input type="text" name="search" placeholder="Holidays in Indonesia">
    </div>
</div>

<hr class="hr__search">

<div class="container">
    <div class="post row">
        <div class="img col-12 col-md-4">
            <div class="tooltipe">
                <img src="assets/IMG/статьи/Редактор1.jpg" class="img-post">
                <span class="Tooltext"><span class="span__name">Alisa Vinogradova</span><br>
              Traveler and writer, visited 83 countries
            </span>
            </div>
        </div>
        <div class="post_text col-12 col-md-8">

            <h2>How to transport fish on an airplane</h2>
            <p class="far">May 29, 2022</p>
            <button class="btn__topik">
                <a href="<?php echo BASE_URL . 'Articles.php';?>">Advice</a>
            </button>
            <p class="preview-text_1">Airlines are happy to transport cats and dogs, but they usually <br>
                refuse to transport ornamental and aquarium fish. But there <br>
                are options.</p>
            <div class="posts">
                <img src="assets/IMG/статьи/статья2/рыбки.jpg" class="img-s">
                <h3 class="t2">Be willing to take risks</h3>
                <p>It is better to check in advance whether your airline will be able to transport <br>
                    fish: preferably even before buying a ticket. Russian carriers (for example,<br>
                    Aeroflot, Utair or S7) in principle do not carry ornamental fish: neither in <br>
                    hand luggage, not in the luggage compartment. Do not approve the <br>
                    transportation of fish and Turkish Airlines.</p>
                <p>Unlike cats and dogs, aquarium fish for airlines are exotic passengers, the <br>
                    carrier will not be responsible for them. But some manage to carry them<br>
                    without notice, hiding them in containers in their luggage or in containers <br>
                    no larger than 100 milliliters in hand luggage. This is a much more risky <br>
                    option, it is better to avoid it and resort to it if there are no other options left.</p>
                <h3>Get help and necessary documents</h3>
                <img src="assets/IMG/статьи/статья2/рыбка2.jpg" class="img-s">
                <p> It is better to check the list of necessary certificates for a flight at the Animal <br>
                    Disease Control Station, and for an international flight - also at the <br>
                    Rosselkhoznadzor and IATA Animal Corner. Naturally, if the airline has <br>
                    approved the transportation of fish for you, it is better to find out the list of<br>
                    documents from her.</p>
                <p>As a rule, for transportation within Russia, confirmation from the Animal <br>
                    Disease Control Station is required that the fish are healthy. For this, you can <br>
                    also contact a private veterinary clinic. Well, if you just bought the fish and<br>
                    immediately want to take them away, you need to keep the receipt.</p>
                <p>For an international flight, a veterinary certificate and an international <br>
                    certificate will be useful.</p>

                <h3>How to transport fish</h3>
                <img src="assets/IMG/статьи/статья2/рыбка3.jpg" class="img-s">
                <p>Depends on the mode of transportation. You will definitely need a place<br>
                    where you can pour water - preferably from the “native” aquarium for<br>
                    the fish.</p>
                <p>For example, it can be a plastic sealed container without sharp corners and <br>
                    with darkened walls. It will need to be filled with water by 1/3 for a short flight.<br>
                    If a long journey is expected, take care of saturating the water with oxygen -<br>
                    for example, look in special pet stores for portable compressors.</p>
                <p>You can also use special "breathable" bags for transporting ornamental fish - <br>
                    these are sold in pet stores and marketplaces. To make sure that the water <br>
                    does not spill, you can put the fish in such a bag, and put the bag in an <br>
                    airtight container.</p>
                <p>Before flying, aquarium fish should not be fed for at least a day. They will <br>
                    survive hunger, and poisoning with traces of vital activity is unlikely. It is<br>
                    also not worth fattening fish after the road: it is also dangerous.</p>

                <button class="btn__topik">
                    <a href="<?php echo BASE_URL . 'Articles.php';?>">Advice</a>
                </button>
            </div>
        </div>
    </div>
</div>


</body>
</html>