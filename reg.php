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
    <title>Регистрация</title>

</head>

<body>

<div class="container reg_form">
<form  method="post" action="reg.php">

    <div class="segment">
        <h1>Sign Up</h1>
    </div>

    <div class="mb-3 err">
        <p>
            <?=$errMsg?>
        </p>
    </div>

    <div class="mb-3">
    <label for="formGroupExampleInput">
        <input type="text" value="<?=$login?>" id="formGroupExampleInput" placeholder="Login" name="login"/>
    </label>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1">
        <input type="email" value="<?=$email?>" id="exampleInputEmail1" placeholder="Email Address" name="mail"/>
    </label>
    </div>

    <div class="mb-3">
    <label for="exampleInputPassword1">
        <input type="password"  placeholder="Password" id="exampleInputPassword1" name="pass-first"/>
    </label>
    </div>

    <div class="mb-3">
    <label for="exampleInputPassword2">
        <input type="password" placeholder="Repeat Password" id="exampleInputPassword2" name="pass-second"/>
    </label>
    </div>

    <button class="red" type="submit" name="button-reg">Sign Up</button>

    <div class="segment">
        <h2>Already with us?</h2>
    </div>

    <a class="red" href="log.php">Sign In</a>



</form>
</div>

</body>