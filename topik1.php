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
  <title>Article #1</title>
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

          <h2>10 creepy and beautiful ghost towns</h2>
          <p class="far">May 19, 2022</p>
          <button class="btn__topik">
              <a href="<?php echo BASE_URL . 'Articles.php';?>">Stories</a>
          </button>
          <p class="preview-text">Places lost in time.</p>
          <p class="p__preview">In the world of housing crisis, mortgages are issued at fabulous <br>
            interest. And somewhere at this time the houses are empty - and <br>
            only the wind, sand and tourists look into the once prosperous cities. <br>
            What happened to them?</p>
        <div class="posts">
          <h3>Kolmanskop, Namibia</h3>
          <img src="assets/IMG/статьи/статья1/1.jpg" class="img-s">
          <p>Probably everyone who is interested in travel has seen these photos at least <br>
            once in their life. A suite of rooms with colored walls, and inside there is sand, <br>
            sand, sand. Paints as in a dream or as in Dali's paintings. Kolmanskop was one <br>
            of the richest cities in Africa. And then he was given to the Namib Desert.</p>
          <p>In 1908, a local worker, Zacharias Levala, discovered diamonds here. Diamond <br>
            rush captured the minds and hearts. The place became lively - and just as <br>
            quickly, by 1956, it was completely abandoned. The heyday of the town lasted <br>
            some 10-20 years. Mostly Germans came here. They built Kolmanskop on the <br>
            model of the German towns of that time. Despite the fact that the city <br>
            consisted of a couple of streets, there was also a casino, a ballroom, a brewery, <br>
            and a stadium.</p>
          <p>But in the case of Kolmanskop, the issue is solved simply: there are almost<br>
            certainly no diamonds here, so you can buy a pass at the gate at the entrance<br>
            to the city or go on a tour from Lüderitz.</p>

          <h3>Kayakoy, Turkey</h3>
          <img src="assets/IMG/статьи/статья1/2.jpg" class="img-s">
          <p>Kayakoy is an open-air museum city, not far from Fethiye, Oludeniz and <br>
            Hisaronu. Picturesque ruins, a corner of silence not far from the hustle<br>
            and bustle of popular tourist places. Abandoned stone houses, chapels, <br>
            shops are randomly scattered along the green hillside. If you have watched <br>
            the movie The Water Seeker with Russell Crowe, you will easily recognize <br>
            the scenery.</p>
          <p>The visit is either paid or free, depending on whether someone is at the <br>
            entrance. In any case, the fee is small, about 40 Turkish lira. The walk <br>
            will take about two hours - do not forget the water. By the way, the famous<br>
            Lycian Way also passes through Kayakoy. So the place is uninhabited, but <br>
            not deserted.</p>
          <p>Although the old settlement itself is abandoned, there are many cafes and<br>
            restaurants at the exit. And it is easy to get to it by dolmush (Turkish minibus) <br>
            or a regular taxi from Oludeniz or Fethiye.</p>

          <h3>Craco, Italy</h3>
          <img src="assets/IMG/статьи/статья1/3.jpg" class="img-s">
          <p>This Italian town may also seem familiar to movie buffs. The films "King David"<br>
            with Richard Gere, "The Passion of the Christ" with Mel Gibson, "Quantum of <br>
            Solace" with Daniel Craig as James Bond were filmed here. The place is incredibly <br>
            picturesque, but, alas, abandoned by the inhabitants.</p>
          <p>Once Krako was a feudal city and a major monastic and educational center with <br>
            a castle, a university, a church and beautiful squares. But first, mass immigration <br>
            to North America in the 1920s, and then natural disasters like earthquakes and <br>
            landslides, made it uninhabitable by 1980.</p>
          <p>Today, Kracko is ransacked, abandoned, and virtually inaccessible to the public,<br>
            unless you're lucky enough to find a knowledgeable local guide to guide you <br>
            inside. Almost all houses have been reduced to ruins, but several authentic old <br>
            buildings, palaces and churches with original frescoes, shutters and railings <br>
            still stand.</p>

          <h3>Grand Bassam, Ivory Coast</h3>
          <img src="assets/IMG/статьи/статья1/4.jpeg" class="img-s">
          <p>Once the French colonial capital of the Ivory Coast, this resort town has now<br>
            become a UNESCO World Heritage Site. You can't call it a ghost town, people<br>
            live here. But there are so many abandoned buildings and they are so colorful<br>
            that Grand Bassam attracts abandoned lovers from all over the world. The most <br>
            famous buildings are the Central African Bank, the Hotel de France and the old<br>
            post office.</p>
          <p>The history of Grand Bassam began long before French colonization. It is believed<br>
            that the Nzema people of the Ivory Coast, also known as the Ndenye or Apollonians, <br>
            settled here as early as the 15th century, turning the city into a lively port and <br>
            fishing village.</p>
          <p>Today, the historical part of the city with its abandoned houses has begun to attract <br>
            new settlers - artists, designers, photographers, sculptors. People come here, restore <br>
            the ruins and breathe new life into the city.</p>

          <h3>Bankhead, Canada</h3>
          <img src="assets/IMG/статьи/статья1/5.jpg" class="img-s">
          <p>Like many ghost towns, Bankhead was once an industrial town. Founded as a <br>
            settlement of coal mining company workers in 1903, it had its own shops, public<br>
            buildings, and a school. Today it is something between an abandoned city and a<br>
            mountain haik. Because it is located on the territory of Banff National Park, <br>
            surrounded by the Rocky Mountains of Canada.</p>
          <p> Many of Bankhead's structures were demolished after the mine closed due to <br>
            strikes in 1922. But this disadvantage is compensated by the beautiful views that <br>
            open up while walking along the hiking trail. Nearby is the resort town of Banff.</p>

          <h3>Hashima Island, Japan</h3>
          <img src="assets/IMG/статьи/статья1/6.jpg" class="img-s">
          <p>A ghost town and island city, Hashima was used as an underwater coal mine <br>
            from 1887 to 1974. Mining was handled by Mitsubishi. In 1916, a seven-story <br>
            apartment building (the first large reinforced concrete building in Japan) was <br>
            built for workers. To protect against typhoons and other adverse conditions, <br>
            durable concrete was still used in the construction of city buildings.</p>
          <p>Despite the tiny size of only 6 hectares, during the heyday of the city in the<br>
            middle of the 20th century, more than 5,200 people lived here. Moreover, <br>
            residential buildings do not occupy the entire island - some of the buildings <br>
            are cafes, shops, schools and even two swimming pools.</p>
          <p>Then the coal dried up and the place was abandoned. But not tourists. In 2015, <br>
            the former industrial town received the status of a UNESCO World Heritage <br>
            Site. Today, tourist boats bring those wishing to immerse themselves in the <br>
            atmosphere of a ghost town from nearby Nagasaki. And you can even take a<br>
            virtual walk through Hashima in 3D.</p>
          <p>Hasima also has dark pages of history. Because it was used as a forced labor<br>
            camp during World War II. Over a thousand Korean and Chinese civilians and <br>
            prisoners of war are said to have died here.</p>

          <h3>Thames Town, China</h3>
          <img src="assets/IMG/статьи/статья1/7.jpg" class="img-s">
          <p>A typical English town - with the only difference that it is located in China.<br>
            Thames Town was built as part of the new city of Songjiang, about 30-40<br>
            kilometers from Shanghai. It was conceived at the beginning of the 2000s as <br>
            part of an initiative to “unload” the overpopulated Shanghai center. It was built <br>
            by a British company, and samples of British architecture were indeed taken <br>
            as a basis.</p>
          <p>In addition to the "English" city, the project also included "French", "German", <br>
            "Scandinavian" and others. But neither the classic British architecture, nor <br>
            the Victorian terraces, nor the cobbled streets, nor the red telephone booths <br>
            have attracted crowds of buyers here. Whether the prices did not like, or <br>
            something else happened, but the city remained empty.</p>
          <p>Thames Town is 4 kilometers from Songjiang New City Station, Line 9 of the <br>
            Shanghai Metro.</p>

          <h3>Doul, Belgium</h3>
          <img src="assets/IMG/статьи/статья1/8.jpg" class="img-s">
          <p>Dul is a small Belgian village near Antwerp. Of the attractions here are a <br>
            windmill of the 17th century and a nuclear power plant. Proximity to Antwerp - <br>
            the second largest city in Belgium and a giant cargo port, in fact, turned Dul <br>
            into a ghost.</p>
          <p>In the 1970s, the Belgian authorities decided to expand the port, and Dul<br>
            unsuccessfully stood in the way. For twenty years, the inhabitants of the <br>
            settlement, whose history spans about seven centuries, resisted the authorities. <br>
            In the late 1990s, many nevertheless left, tempted by attractive compensation <br>
            from the state, but there were also those who did not succumb to persuasion.<br>
            Protests and heavy media coverage thwarted demolition plans. The dul still <br>
            stands, although only 21 people now live here. But there are those who do not <br>
            mind joining them. For example, street artists who chose the deserted streets<br>
            of Dula as their canvas.</p>
          <p>In 2016, the Belgian Supreme Court rejected another plan to expand the port<br>
            after the European Court of Justice ruled that it threatened the marshy <br>
            surroundings of Dula and the ecology of the Scheldt River nearby. This gives<br>
            the residents hope.</p>

          <h3>Pyramid, Norway</h3>
          <img src="assets/IMG/статьи/статья1/9.jpg" class="img-s">
          <p>The pyramid, located above the Arctic Circle on the Svalbard archipelago, was <br>
            once a thriving coal mining settlement. Today it is a machine of times, returning<br>
            to the times of the USSR. Why USSR? Because Pyramiden is a Russian mining <br>
            village, although it is located on the island of Western Spitsbergen, which belongs<br>
            to Norway. Why time machine? Because the village was “mothballed” in the 1990s.</p>
          <p>All urban development is the classic architecture of the communist period, from <br>
            residential buildings to a heliport. Some of the interiors have been completely <br>
            preserved from those times, some have been restored taking into account the style <br>
            of the era. For example, a hotel and a restaurant restored in retro style work <br>
            in the Pyramid. Compared to other similar places, the Pyramid was practically<br>
            not looted due to its remoteness from everything.</p>
          <p>Almost no one lives in the Pyramid. Almost, because 10 people stay here for the <br>
            winter and 50 people serve the tourist infrastructure in the summer. They walk <br>
            around the village with weapons - to scare away bears.</p>
          <p>To get to the Pyramid, you will first need to get to Longyearbyen, and then take <br>
            a boat or snowmobile that will take you to the village.</p>

          <h3>Hampi, India</h3>
          <img src="assets/IMG/статьи/статья1/10.jpg" class="img-s">
          <p>One of the Indian ghost towns near Bangalore, which was chosen by hippies and <br>
            tourists. In the XIV-XV centuries, a city flourished here, the ruins of which are<br>
            still impressive. In the Middle Ages, Hampi was the richest city in India, where<br>
            merchants reached even from Persia and Portugal. Therefore, many archaeological <br>
            artifacts have been preserved here - the ruins of temples and forts, mysterious <br>
            dungeons. In one of the temples, for example, there are amazing “singing” columns<br>
            that emit a melody when lightly tapped. All this helped Hampi receive UNESCO<br>
            World Heritage status in 1986.</p>
          <p>But Hampi is not only the ruins of temples. There's so much more to explore, from<br>
            Hippie Island, dotted with cafes and budget accommodations, to the Daroji Bear<br>
            Sanctuary.</p>
          <p>The nearest international airport is in Bangalore. From there, the Hampi Express<br>
            and regular buses run.</p>

          <button class="btn__topik">
              <a href="<?php echo BASE_URL . 'Articles.php';?>">StoriesStories</a>
          </button>
        </div>
        </div>
      </div>
</div>


</body>
</html>