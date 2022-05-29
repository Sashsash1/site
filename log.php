<?php
include ("path.php");
include ("app/controllers/users.php");
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

    <link rel="stylesheet" href="assets/CSS/reg.css">
    <title>Авторизация</title>

</head>

<body>

<div class="container reg_form">
    <form  method="post" action="log.php">
        <div class="segment">
            <h1>Sign In</h1>
        </div>
        <div class="mb-3 err">
            <p>
                <?=$errMsg?>
            </p>
        </div>

        <div class="mb-3">
        <label for="formGroupExampleInput">
            <input type="email" value="<?=$email?>" id="exampleInputEmail1" placeholder="Email Address" name="mail"/>
        </label>
        </div>

        <div class="mb-3">
        <label for="exampleInputPassword1">
            <input name="password" type="password"  placeholder="Password" id="exampleInputPassword1"/>
        </label>
        </div>


        <button class="red" type="submit" name="button-log">Sign In</button>

        <div class="segment">
            <h2>Not with us yet?</h2>
        </div>

        <a class="red" href="reg.php">Sign Up</a>

    </form>
</div>

</body>