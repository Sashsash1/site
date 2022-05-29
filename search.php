<?php
    include "path.php";
    include SITE_ROOT . "/app/database/db.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-term'])){
        $posts = seacrhInTitileAndContent($_POST['search-term'], 'posts', 'users');
    }
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


    <link rel="stylesheet" href="assets/CSS/articles.css">

    <title>Статьи о путешествиях</title>


</head>
<body>


<!--------------------СТАТЬИ-------------------------------------------------->
<div class="container_2">
    <div class="sidebar">
        <div class="side-wrapper">
            <div class="side-title">CATEGORY</div>
            <div class="side-menu">
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li>
                            <a class="sidebar-link" href="#"><?=$topic['name'];?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="wrapme">
    <div class="search-bar">
        <form action="search.php" method="post">
            <input type="text" name="search-term" placeholder="Holidays in Indonesia">
        </form>
    </div>
</div>


<hr class="hr__search">

<div class="container">
    <div class="content row">
        <div class="main-content col-md-9">

            <?php foreach ($posts as $post): ?>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <div class="tooltipe">
                            <img src="<?=BASE_URL . 'assets/IMG/posts/' . $post['img'] ?>>" class="img-post" alt="<?=$post['title']?>">
                            <span class="Tooltext"><span class="span__name"><?=$post['username'];?></span><br>
                        Traveler and writer, visited 83 countries
                        </span>
                        </div>
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h2>
                            <a href="<?=BASE_URL . 'topik1.php?post=' . $post['id']; ?>"><?=substr($post['title'], 0, 120) . '...' ?></a>
                        </h2>
                        <p class="far"><?=$post['created_date'];?></p>
                        <p class="preview-text"><?=mb_substr($post['content'], 0, 150, 'UTF-8') . '...' ?></p>
                        <button class="btn-post anim">Read</button>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>




<!-------------------- / СТАТЬИ-------------------------------------------------->

</body>
</html>